$(window).on('load', function (){
	var url = window.location.href;
	url = new URL(url);
	var c = url.searchParams.get("cat");
	//Var
	var filterObj = {
		'contrat': null,
		'salarymin': null,
		'salarymax': null,
		'city': null,
		'pays': null,
		'cat': null,
		'urgent': false,
	};
	//Events
	$('#is-urgent').on('click', function(){
		filterObj.urgent = this.checked;
		filter();
	});
	$('#check-pays').on('change', function(){
		if(this.value == "null")
			filterObj.pays = null;
		else
			filterObj.pays = this.value;
		filter();
	});
	$('#check-local').on('change', function(){
		if(this.value == "null")
			filterObj.city = null;
		else
			filterObj.city = this.value;
		filter();
	});
	$('#check-sal-min').on('change', function(){
		if(this.value == "null")
			filterObj.salarymin = null;
		else
			filterObj.salarymin = this.value;
		filter();
	});
	$('#check-sal-max').on('change', function(){
		if(this.value == "null")
			filterObj.salarymax = null;
		else
			filterObj.salarymax = this.value;
		filter();
	});
	$('#check-contrat').on('change', function(){
		if(this.value == "null")
			filterObj.contrat = null;
		else
			filterObj.contrat = this.value;
		filter();
	});
	$('#check-cat').on('change', function(){
		if(this.value == "null")
			filterObj.cat = null;
		else
			filterObj.cat = this.value;
		filter();
	});
	$('#pages').on('click', function(e){
		var n = e.target.id.substring(11);
		var current = $('#list-offer-cards')[0].className.match((/(^|\s)page-\S+/g) || []).join(' ').substring(6);
		if(n != current)
			goToPage(n, current);
	})
	//Functions
	var resetPages = function(){
		$(".offre-card").animate({opacity:"0"},275)
		$("#list-offer-cards").removeClass(function (index, className) {
		    return (className.match (/(^|\s)page-\S+/g) || []).join(' ');
		});
		var filteredDom = $('.offre-card');
		[].forEach.call(filteredDom, function(e,i,a) {
			if(!e.classList.contains('filtered'))
				window.setTimeout(function(){e.style.display = "none";}, 275);
		});
		[].forEach.call($('.offre-card.filtered'), function(e,i,a) {
			if(i >= 0 && i <= 11)
				window.setTimeout(function(){e.style.display = "block";}, 275);
		});
		$("#list-offer-cards").addClass('page-1');
		$(".offre-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
		var nbPages = Math.ceil($('.filtered').length/12);
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
				}
				else if(key == "salarymin"){
					if(filterObj.salarymin != null && offre.salarymin != 0 && offre.salarymin < filterObj.salarymin)
						itemFiltered = false;
				}
				else if(key == "salarymax"){
					if(filterObj.salarymax != null && offre.salarymax != 0 && offre.salarymax > filterObj.salarymax)
						itemFiltered = false;
				}
				else{
					if(filterObj[key] != null){
						if(offre[key] != filterObj[key])
							itemFiltered = false;
					}
				}
			});
			if(itemFiltered && !offreCard.hasClass('filtered'))
				offreCard.addClass('filtered');
			else if(!itemFiltered && offreCard.hasClass('filtered'))
				offreCard.removeClass('filtered');
		});
		resetPages();
	}

	var goToPage = function(n, current){
		var nextPage = parseInt(current)+1;
		if(n.match(/^[0-9]+$/) != null){
			$(".offre-card").animate({opacity:"0"},275)
			$("#list-offer-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.offre-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.offre-card.filtered'), function(e,i,a){
				if(i >= (n-1)*12 && i <= (n-1)*12+11)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-offer-cards").addClass('page-'+n);
			$(".offre-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-offer-cards').offset().top - 50
		    }, 750);
		}
		else if(n == "next" && current.match(/^[0-9]+$/) != null && $('#go-to-page-'+nextPage).length > 0){
			$(".offre-card").animate({opacity:"0"},275)
			$("#list-offer-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.offre-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.offre-card.filtered'), function(e,i,a){
				if(i >= (nextPage-1)*12 && i <= (nextPage-1)*12+11)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-offer-cards").addClass('page-'+(nextPage));
			$(".offre-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-offer-cards').offset().top - 50
		    }, 750);
		}
	}

	if(c != null){
		filterObj.cat = c;
		filter()
	}
});