module SiteHelpers
  def page_title
    title = current_resource.data.title
    title = "#{title} · Allan DeHaan Art" if title
    title ||= "Allan DeHaan Art"
  end

  def image_tag_retina(path, classname)
    image_tag(path.to_s, class: classname.to_s, data: { retina: "url('#{ path }@2x'" })
  end

end
