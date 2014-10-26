$(function(){
	$('body.front .gallery .piece').click(function() {
		window.location=$(this).find("a").attr("href"); 
		return false;
	});

	if ($('body').hasClass('front')) {
    	
    	$('body.front .iris').xeyes();	
		
		$('body.front .the-end h3').lettering();
    }

    $('.menu .contact-form').click(function() {
		$('#contact-form').modal('show');
		return false;
	});

	if ($('body').hasClass('westcoast')) {

		/*
			$('body.westcoast table td.i').click( function() {
			console.log('.');

			$(this).toggleClass('highlight');
			$('.meta-print .content').slideToggle();
			});
		*/
    }

});

