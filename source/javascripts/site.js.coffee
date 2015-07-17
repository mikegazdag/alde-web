$ ->

  $(window).on "resize", adjustHeights(".masthead, .album")

  # Inline retina images
  if window.devicePixelRatio > 1
    $('[data-retina-bg]').each ->
      this.style.backgroundImage = this.getAttribute('data-retina-bg')


  $('.button').on 'click', (e) ->
    e.preventDefault()
    console.log $(this).text()
    $('section.purchase').toggleClass('is-open')
    # return
  # Contact form submission
  # $(".contact-form").submit (e) ->
  #   e.preventDefault()
  #   e.stopPropagation()
  #   $form = $(this)

  #   nameValue = $form.find(".contact-input-name").val().trim()
  #   emailValue = $form.find(".contact-input-email").val().trim()
  #   messageValue = $form.find(".contact-message").val().trim()

  #   $.ajax
  #     dataType: "jsonp"
  #     url: "http://getsimpleform.com/messages/ajax?form_api_token=NEWTOKEN"
  #     data:
  #       name: nameValue
  #       email: emailValue
  #       message: messageValue
  #     success: (data, text) ->
  #       console.log "success"
  #       $form.addClass("zoomOut").delay(200).queue (next) ->
  #         $(this).addClass "is-hidden"
  #         next()
  #       $(".contact-response.success").removeClass("is-hidden")
  #     error: (request, status, error) ->
  #       alert request.responseText
  #       $form.addClass("zoomOut").delay(200).queue (next) ->
  #         $(this).addClass "is-hidden"
  #         next()
  #       $(".contact-response.error").removeClass("is-hidden")
  #       return

#------------------------------------------------------------------------------
# Add over classes to parent elements from <a>
#------------------------------------------------------------------------------
fancyHover = (selector, parent) ->
  $(selector).on
    mouseenter: ->
      $(selector).parents(parent).addClass("is-hover")

    mouseleave: ->
      $(selector).parents(parent).removeClass("is-hover")

#------------------------------------------------------------------------------
# Increase element to browser's viewport size
#------------------------------------------------------------------------------
adjustHeights = (selector) ->
  viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
  $(selector).css("min-height", "#{viewportHeight}px")

#------------------------------------------------------------------------------
# Check Email
#------------------------------------------------------------------------------
showResponse = (message) ->
  $(".form-response p").html(message)
  $(".newsletter .form-response").addClass("is-visible")
  $(".newsletter form, .newsletter-text").addClass("is-hidden")
  return
