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

//Sticky menu
function checkStickyMenu(){
    var y_scroll_pos = window.pageYOffset;

    if(y_scroll_pos > 0) {
        $('header').addClass('sticky');
        $('nav').addClass('sticky');
    }
    else{
        $('header').removeClass('sticky');
        $('nav').removeClass('sticky');
    }
}

$(window).on('load', function (){
    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });
/******************************************************************/
    if($('#cv-input')){
        $('#cv-input').on('change', function(){
            var cutAt = this.value.lastIndexOf('\\')+1;
            var fileName = this.value.substring(cutAt);
            $('#cv-filename').text(fileName);
        })
    }
/******************************************************************/

    if($('.profil .offre-card')){
        $('.offre-card .delete').on('click', function(){
            var ajaxUrl = window.location.protocol + "//" + window.location.host + "/wp-admin/admin-ajax.php";
            var offerIdUserId = this.id.substring(7).split('-');
            var offerId = offerIdUserId[0];
            var userId = offerIdUserId[1];
            console.log(offerId);
            console.log(userId);
            $("#offre-"+offerId).css('filter', 'grayscale(0.7) contrast(0.60)');
            $.ajax({
                type: "POST",
                url: ajax_params.ajax_url,
                data: {
                    'action' : 'deleteCandidature',
                    'offerId': offerId,
                    'userId': userId
                },
                async: true,
                dataType: "json",
                error: function (err) {
                    console.error(err);
                    $("#offre-"+offerId).css('filter', 'none');
                },
                success: function (response) {
                    var data = response;
                    console.log(data);
                    if(data){
                        $("#offre-"+offerId).fadeOut();
                    }
                }
            });
        })
    }

/******************************************************************/
    $('#go-to-signup').on('click', function(){
        $('#wp-login').hide();
        $('#wp-signup').show();
    });

    $('#go-to-login').on('click', function(){
        $('#wp-signup').hide();
        $('#wp-login').show();
    });

/******************************************************************/
    $(window).on('scroll', function() {
        checkStickyMenu();
    });
    $( window ).resize(function() {
      checkStickyMenu();
    });
    checkStickyMenu();

/******************************************************************/

 if($('#hp-choix-profil')){
    $('#hp-choix-profil').on('change', function(){
        if(this.value != "null"){
            window.location = this.value;
        }
    });
 }

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


