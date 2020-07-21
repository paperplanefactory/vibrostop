$(document).ready(function() {
	// Wrappo i video player in una div per dimensionarli responsive
	$('.content-styled iframe').wrap('<div class="video_frame"></div>');
	// Controllo se l'immagine ha la didascalia e se manca la wrappo per allinearla
	if(! $('img.alignnone').closest('.wp-caption').length ) {
		$('img.alignnone').wrap('<div class="wp-caption alignnone"></div>');
	}
	if(! $('img.aligncenter').closest('.wp-caption').length ) {
		$('img.aligncenter').wrap('<div class="wp-caption aligncenter"></div>');
	}
	if( $('img.alignleft') ) {
		$('img.alignleft').wrap('<div class="wp-caption alignleft"></div>');
	}
	if( $('img.alignright') ) {
		$('img.alignright').wrap('<div class="wp-caption alignright"></div>');
	}
	$(document).scroll(function() {
        fromTop = $(document).scrollTop();
        if ( fromTop > 100 ) {
            $('#header').addClass( "header-plain" );
						$('#header').removeClass( "header-shadow" );
        }
				else {
					$('#header').addClass( "header-shadow" );
					$('#header').removeClass( "header-plain" );
				}
    });
	// pulsante apertura lingue
	$('.current-langm').click(function() {
		$('.lang_listed').fadeToggle(300);
	});
	// hamburger
	$('.ham-activator, .search-open').click(function(){
		$('.nav-icon3').toggleClass('open');
		if ( $( '.nav-icon3' ).hasClass('open') ) {
		}
		else {
		}
		$('.lang_listed').fadeOut(300);
		$( '#header-overlay' ).fadeToggle( 150, "linear" );
	});
	$('.search-open').click(function(){
		$( "#searchtype" ).focus();
	});
});
