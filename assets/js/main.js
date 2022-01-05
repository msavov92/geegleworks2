;(function( win, doc, $) {
	var $win = $(win),
		$doc = $(doc);

	$doc.ready(function() {
		$('.side-tab').on('click', function (e){
			var id = $(this).data('target');
			var $activeTabPane = $('.tab-pane.active');
			if ($(id).find("img").attr("src") === $activeTabPane.find("img").attr("src")) {
				e.preventDefault();
				return false;
			}
		});
	});


	$('input, textarea').focus(function() {
		$(this).parent().addClass('active');
		$('input, textarea').focusout(function() {
			if ($(this).val() == '') {
				$(this).parent().removeClass('active');
			} else {
				$(this).parent().addClass('active');
			}
		});
	});

	// hamburger
	 $(".hamburger").click(function(e){
		e.preventDefault();
		$(this).toggleClass("is-active");
		if ($(this).hasClass("is-active")) {
			$('.main-nav').show('slow');
		} else {
			$('.main-nav').removeAttr('style');
		}
		var $nav = $('.main-nav ul li a');
		$nav.on('click', function() {
			$('.hamburger').removeClass('is-active');
		})
	});


	// Contacts
	(function($element) {
        $element.on('click', "a[href]", function(e) {
            var hash = $(this).attr("href").split('#')[1] || "";
            if (!hash || !hash.length) {
            	return true;
            }
            var $link = $('#' + hash);

            if ($link && $link.length) {
                e.preventDefault();
                var position = $link.offset().top;

                $('html, body').animate({
                    scrollTop: position
                }, 1000, 'swing', function() {
                    window.location.hash = hash;
                });
            } else {
            	return true;
            }
        });
    })($('header .main-nav, .contacts'));


    // Scroll to top
    $scrollTop = $('.scroll-top');
    $doc.on('scroll', function(){
        if ( $win.scrollTop() > 100 ) {
            $scrollTop.addClass('show');
        } else {
            $scrollTop.removeClass('show');
        }
    });
    $scrollTop.on('click', function() {
        $('html, body').animate({scrollTop:0}, 1000, 'swing');
    });

})( window, document, $);
