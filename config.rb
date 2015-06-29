require "slim"
require "susy"
require "breakpoint"
require "bourbon"

set :slim, {
  pretty: true,
  format: :html,
  use_html_safe: true,
  tabsize: 2
}

config[:css_dir] = "stylesheets"
config[:js_dir] = "javascripts"
config[:images_dir] = "images"

activate :directory_indexes
activate :livereload

require File.join(File.dirname(__FILE__), "/lib", "sass_extensions.rb")

page "/404.html", directory_index: false
page "/sitemap.xml", layout: false

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
  deploy.host   = ENV["DEPLOY_HOST"]
  deploy.path   = ENV["DEPLOY_PATH"]
  deploy.clean = true
  deploy.build_before = true
end

#-----------------------------------------------------------------------------
# Build
#-----------------------------------------------------------------------------

configure :build do
  activate :asset_hash, ignore: %r{/.+(jpg|png|gif)}i
  activate :minify_css
  activate :minify_javascript
  activate :gzip
end
