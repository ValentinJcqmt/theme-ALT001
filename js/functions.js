function initMap() {
    $(window).on('load', function (){
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map-localisation'), {
            zoom: 11
        });
        var loc;
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': zipcode}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            //Got result, center the map and put it out there
            loc = results[0].geometry.location;
            map.setCenter(loc);
          } else {
            alert("Geocode was not successful for the following reason: " + status);
          }
        });
    });
}


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
 if($('#hp-odometer').length){

        Odometer.init();

        // Function used to detect if the element is scrolled in view
        function elementScrolled(elem)
        {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
        }

        function animateChiffresHp(){
            if(elementScrolled('#hp-odometer')) {
                if($('#hp-odometer').text() == 0)
                    $('#hp-odometer').text(odometerCount);
            }
        }

        //On scroll, check if numbers should be animated
        $(window).scroll(function(){
            animateChiffresHp();
        });
        //On page loaded, check if numbers should be animated
        animateChiffresHp();
    }
/*******************************************************************************************/
});


