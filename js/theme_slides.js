$(document).ready(function() {
	singleSlideWidth = $('.modulo-slideshow-immagini').width() / 4 + 10;
	$(".prodcuctslider li").css("width", singleSlideWidth);

	singleSlideWidthCons = $('.modulo-slideshow-immagini').width() / 3 + 10;
	$(".consulenzaslider li").css("width", singleSlideWidth);

	windowWidth = $(window).width();
	if ( windowWidth >= 1024 ) {
		slidepair = 4;
		slidepairCon = 3;
	}
	if ( windowWidth < 1024 ) {
		slidepair = 2;
		slidepairCon = 1;
	}
	if ( windowWidth < 768 ) {
		slidepair = 1;
		slidepairCon = 1;
	}



	$('.prodcuctslider').bxSlider({
		slideWidth: 4000,
		speed: 800,
    minSlides: slidepair,
    maxSlides: slidepair,
    slideMargin: 0,
		touchEnabled: true,
		controls: true,
    pager: false,
    mode: 'horizontal',
    infiniteLoop: false,
    controls: true,
    auto: false,
    nextText: '',
    prevText: ''
  });

	$('.consulenzaslider').bxSlider({
		slideWidth: 4000,
		speed: 800,
    minSlides: slidepairCon,
    maxSlides: slidepairCon,
    slideMargin: 0,
		touchEnabled: true,
		controls: true,
    pager: false,
    mode: 'horizontal',
    infiniteLoop: true,
    controls: true,
    auto: false,
    autoHover: true,
    nextText: '',
    prevText: ''
  });

	$( window ).resize(function() {
		windowWidth = $(window).width();
		if ( windowWidth >= 1024 ) {
			slidepair = 4;
			slidepairCon = 3;
		}
		if ( windowWidth < 1024 ) {
			slidepair = 2;
			slidepairCon = 2;
		}
		if ( windowWidth < 768 ) {
			slidepair = 1;
			slidepairCon = 1;
		}
		$('.prodcuctslider').bxSlider({
			slideWidth: 4000,
			speed: 800,
	    minSlides: slidepair,
	    maxSlides: slidepair,
	    slideMargin: 0,
			touchEnabled: true,
			controls: true,
	    pager: false,
	    mode: 'horizontal',
	    infiniteLoop: false,
	    controls: true,
	    auto: false,
	    nextText: '',
	    prevText: ''
	  });

		$('.locationslider').bxSlider({
			slideWidth: 4000,
			speed: 800,
	    minSlides: slidepairCon,
	    maxSlides: slidepairCon,
	    slideMargin: 0,
			touchEnabled: true,
			controls: true,
	    pager: false,
	    mode: 'horizontal',
	    infiniteLoop: true,
	    controls: true,
	    auto: true,
	    pause: 4000,
	    autoHover: true,
	    nextText: '',
	    prevText: ''
	  });
	});


});
