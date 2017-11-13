$(window).on('load', function (){
	//Var
	var filterObj = {
		'cat': null,
	};
	//Events
	$('#check-cat').on('change', function(){
		if(this.value == "null")
			filterObj.cat = null;
		else
			filterObj.cat = this.value;
		filter();
	});
	$('#pages').on('click', function(e){
		var n = e.target.id.substring(11);
		var current = $('#list-article-cards')[0].className.match((/(^|\s)page-\S+/g) || []).join(' ').substring(6);
		if(n != current)
			goToPage(n, current);
	})
	//Functions
	var resetPages = function(){
		$(".article-card").animate({opacity:"0"},275)
		$("#list-article-cards").removeClass(function (index, className) {
		    return (className.match (/(^|\s)page-\S+/g) || []).join(' ');
		});
		var filteredDom = $('.article-card');
		[].forEach.call(filteredDom, function(e,i,a) {
			if(!e.classList.contains('filtered'))
				window.setTimeout(function(){e.style.display = "none";}, 275);
		});
		[].forEach.call($('.article-card.filtered'), function(e,i,a) {
			if(i >= 0 && i <= 8)
				window.setTimeout(function(){e.style.display = "block";}, 275);
		});
		$("#list-article-cards").addClass('page-1');
		$(".article-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
		var nbPages = Math.ceil($('.filtered').length/9);
		$('#pages').empty();
		if(nbPages > 1){
			for(var i=1; i<=nbPages; i++){
				$('#pages').append('<div class="page-number" id="go-to-page-'+i+'">'+i+'</div>');
			}
			$('#pages').append('<div class="page-number text-uppercase" id="go-to-page-next">Page suivante</div>');
		}
	}
	var filter = function(){
		articles.forEach(function(article){
			var articleCard = $('#'+article.id);
			var itemFiltered = true;
			Object.keys(filterObj).forEach(function(key){
				if(filterObj[key] != null){
					if(article[key] != filterObj[key])
						itemFiltered = false;
				}
			});
			if(itemFiltered && !articleCard.hasClass('filtered'))
				articleCard.addClass('filtered');
			else if(!itemFiltered && articleCard.hasClass('filtered'))
				articleCard.removeClass('filtered');
		});
		resetPages();
	}

	var goToPage = function(n, current){
		var nextPage = parseInt(current)+1;
		if(n.match(/^[0-9]+$/) != null){
			$(".article-card").animate({opacity:"0"},275)
			$("#list-article-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.article-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.article-card.filtered'), function(e,i,a){
				if(i >= (n-1)*9 && i <= (n-1)*9+8)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-article-cards").addClass('page-'+n);
			$(".article-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-article-cards').offset().top - 50
		    }, 750);
		}
		else if(n == "next" && current.match(/^[0-9]+$/) != null && $('#go-to-page-'+nextPage).length > 0){
			$(".article-card").animate({opacity:"0"},275)
			$("#list-article-cards").removeClass(function (index, className) {
			    return (className.match(/(^|\s)page-\S+/g) || []).join(' ');
			});
			var filteredDom = $('.article-card');
			[].forEach.call(filteredDom, function(e,i,a) {
				if(!e.classList.contains('filtered'))
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			[].forEach.call($('.article-card.filtered'), function(e,i,a){
				if(i >= (nextPage-1)*9 && i <= (nextPage-1)*9+8)
					window.setTimeout(function(){e.style.display = "block";}, 275);
				else
					window.setTimeout(function(){e.style.display = "none";}, 275);
			});
			$("#list-article-cards").addClass('page-'+(nextPage));
			$(".article-card").animate({opacity:"0"},275).animate({opacity:"1"}, 275);
			$('body, html').animate({
	        	scrollTop: $('#list-article-cards').offset().top - 50
		    }, 750);
		}
	}
});