$(window).on('load', function (){
	//Events
	$('#is-urgent').on('change', function(){
		offres.forEach(function(e){
			if(!e.urgent && this.checked){
				$('#'+e.id).removeClass('filtered');
			}
			else if( !this.checked && !$('#'+e.id).hasClass('filtered')){
				$('#'+e.id).addClass('filtered');
			}
		});
	});
	//Functions
});