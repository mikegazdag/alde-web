require "slim"
require "susy"
require "breakpoint"

set :slim, pretty: true, format: :html5, use_html_safe: true, tabsize: 2

set :css_dir, "stylesheets"
set :js_dir, "javascripts"
set :images_dir, "images"

activate :livereload
activate :directory_indexes
# activate :automatic_image_sizes

page "/404.html", :directory_index => false

require File.join(File.dirname(__FILE__), "/lib", "sass_extensions.rb")

page "/sitemap.xml", :layout => false

activate :autoprefixer do |config|
  config.browsers = ['last 2 versions', 'Explorer >= 9']
  config.cascade  = true
end

# data.paintings.each do |p|
#   proxy "/painting/#{p.name.parameterize}.html", "/painting/painting.html", :locals => {:name => p }, :ignore => true, layout: "layout"
# end

#-----------------------------------------------------------------------------
# Deployment
#-----------------------------------------------------------------------------
activate :deploy do |deploy|
  deploy.method = :rsync
  deploy.host   = "orm"
  deploy.path   = "~/www/dev.ormazzi.com"
  # deploy.user  = ENV["DEPLOY_USERNAME"]
  # deploy.password  = ENV["DEPLOY_PASSWORD"]
  deploy.clean = true
  deploy.build_before = true
end

#-----------------------------------------------------------------------------
# Production Redirects
#-----------------------------------------------------------------------------

# activate :s3_redirect do |config|
#   config.bucket = ENV["S3_SYNC_BUCKET"]
#   config.region = ENV["S3_REGION"]
#   config.aws_access_key_id = ENV["AWS_ACCESS_KEY_ID"]
#   config.aws_secret_access_key = ENV["AWS_SECRET_ACCESS_KEY"]
#   config.after_build = false
# end

# data.redirects.each do |redirect|
#   redirect redirect.source, redirect.destination
# end

#-----------------------------------------------------------------------------
# Build
#-----------------------------------------------------------------------------

configure :build do
  #   activate :favicon_maker, :icons => {
  #   "images/_favicon_template.png" => [
  #     { icon: "apple-touch-icon-152x152-precomposed.png" },
  #     { icon: "apple-touch-icon-114x114-precomposed.png" },
  #     { icon: "apple-touch-icon-72x72-precomposed.png" },
  #   ]
  # }

  activate :asset_hash, :ignore => %r{/.+(jpg|png|gif)}i
  activate :minify_css
  activate :minify_javascript
  activate :gzip
end
