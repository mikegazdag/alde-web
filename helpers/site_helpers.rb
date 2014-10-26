require "pathname"

module SiteHelpers
    def page_title
    title = current_resource.data.title
    title = "#{title} · Allan DeHaan Art" if title
    title ||= "Allan DeHaan Art"
  end

end
