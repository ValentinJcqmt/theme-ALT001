
$(window).on('load', function (){

/******************************************************************/
    //Sticky menu
    function checkStickyMenu(){
        var y_scroll_pos = window.pageYOffset;

        if ($(window).width() > 991) {
            if(y_scroll_pos > 0) {
            	$('header').addClass('sticky');
            }
            else{
            	$('header').removeClass('sticky');
            }
        }
    }
    $(window).on('scroll', function() {
        checkStickyMenu();
    });
    $( window ).resize(function() {
      checkStickyMenu();
    });
    checkStickyMenu();

/******************************************************************/

	$('#back-to-top').on('click', function(){
		$('html, body').animate({
        	scrollTop: 0
	    }, 700);
	});

/******************************************************************/
    $(".owl-carousel-offres-hp").owlCarousel({
        items:1,
        nav:false,
        dots:true,
    });
/*********************************************************************/
});


