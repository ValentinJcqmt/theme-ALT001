$(window).on('load', function (){
	//Var
	var filterObj = {
		'contrat': null,
		'salary-min': null,
		'salary-max': null,
		'city': null,
		'pays': null,
		'urgent': false,
	};
	//Events
	$('#is-urgent').on('click', function(){
		filterObj.urgent = this.checked;
		filter();
	});
	$('#pages').on('click', function(e){
		var n = e.target.id.substring(11);
		var current = $('#list-offer-cards')[0].className.match((/(^|\s)page-\S+/g) || []).join(' ').substring(6);
		if(n != current){
			goToPage(n, current);
		}
	})
	//Functions
	var resetPages = function(){
		$("#list-offer-cards").removeClass(function (index, className) {
		    return (className.match (/(^|\s)page-\S+/g) || []).join(' ');
		});
		$("#list-offer-cards").addClass('page-1');
		var nbPages = Math.floor($('.filtered').length/12);
		//$('#nb-offres')[0].textContent = $('.filtered').length+" offres d'emploi";
		$('#pages').empty();
		if(nbPages > 1){
			for(var i=1; i<=nbPages; i++){
				$('#pages').append('<div class="page-number" id="go-to-page-'+i+'">'+i+'</div>');
			}
			$('#pages').append('<div class="page-number text-uppercase" id="go-to-page-next">Page suivante</div>');
		}
	}
	var filter = function(){
		offres.forEach(function(offre){
			var offreCard = $('#'+offre.id);
			var itemFiltered = true;
			Object.keys(filterObj).forEach(function(key){
				if(key == 'urgent'){
					if(filterObj.urgent && offre.urgent == false)
						itemFiltered = false;
					else
						itemFiltered = true;
				}
				else{
					if(filterObj[key] != null && offre[key] == filterObj[key])
						itemFiltered = true;
					else if(filterObj[key] != null && offre[key] != filterObj[key])
						itemFiltered = false;
				}
			});
			if(itemFiltered && !offreCard.hasClass('filtered')){
				offreCard.addClass('filtered');
				offreCard.fadeIn();
			}
			else if(!itemFiltered && offreCard.hasClass('filtered')){
				offreCard.removeClass('filtered');
				offreCard.fadeOut();
			}
		});
		resetPages();
	}

	var goToPage = function(n, current){
		var nextPage = parseInt(current)+1;
		if(n.match(/^[0-9]+$/) != null){
			$("#list-offer-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			$("#list-offer-cards").addClass('page-'+n);
			$(".filtered").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-offer-cards').offset().top - 50
		    }, 750);
		}
		else if(n == "next" && current.match(/^[0-9]+$/) != null && $('#go-to-page-'+nextPage).length > 0){
			$("#list-offer-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			$("#list-offer-cards").addClass('page-'+(nextPage));
			$(".filtered").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-offer-cards').offset().top - 50
		    }, 750);
		}
	}
});