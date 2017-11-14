$(window).on('load', function (){
	$('#pages').on('click', function(e){
		var n = e.target.id.substring(11);
		var current = $('#list-metier-cards')[0].className.match((/(^|\s)page-\S+/g) || []).join(' ').substring(6);
		if(n != current)
			goToPage(n, current);
	})
	var goToPage = function(n, current){
		var nextPage = parseInt(current)+1;
		if(n.match(/^[0-9]+$/) != null){
			$(".metier-card").animate({opacity:"0"},275)
			$("#list-metier-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.metier-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.metier-card.filtered'), function(e,i,a){
				if(i >= (n-1)*10 && i <= (n-1)*10+9)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-metier-cards").addClass('page-'+n);
			$(".metier-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-metier-cards').offset().top - 50
		    }, 750);
		}
		else if(n == "next" && current.match(/^[0-9]+$/) != null && $('#go-to-page-'+nextPage).length > 0){
			$(".metier-card").animate({opacity:"0"},275)
			$("#list-metier-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.metier-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.metier-card.filtered'), function(e,i,a){
				if(i >= (nextPage-1)*10 && i <= (nextPage-1)*10+9)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-metier-cards").addClass('page-'+(nextPage));
			$(".metier-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-metier-cards').offset().top - 50
		    }, 750);
		}
	}
});