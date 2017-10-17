
$(window).on('load', function (){

/******************************************************************/
    //Sticky menu
    function checkStickyMenu(){
        var y_scroll_pos = window.pageYOffset;

        if ($(window).width() > 991) {
            if(y_scroll_pos > 0) {
            	$('header').addClass('sticky');
                // $('header ,.account-img').addClass('bg-white');
                // $('header ,.account-img').removeClass('bg-blue');
                // $('header ,#account').addClass('text-black');
                // $('header ,#account').removeClass('text-white');
                // $('#header-logo').addClass('d-flex');
                // $('#header-logo').removeClass('d-none');
            }
            else{
            	$('header').removeClass('sticky');
             //    $('header ,.account-img').removeClass('bg-white');
             //    $('header ,.account-img').addClass('bg-blue');
             //    $('header ,#account').addClass('text-white');
             //    $('header ,#account').removeClass('text-black');
            	// $('#header-logo').removeClass('d-flex');
             //    $('#header-logo').addClass('d-none');
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

});


