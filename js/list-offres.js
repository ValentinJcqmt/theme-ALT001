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
		var n = e.target.id;
		goToPage(n);
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

	var goToPage = function(n){
		$("#list-offer-cards").removeClass(function (index, className) {
		    return (className.match (/(^|\s)page-\S+/g) || []).join(' ');
		});
		$("#list-offer-cards").addClass('page-'+n);
	}
});