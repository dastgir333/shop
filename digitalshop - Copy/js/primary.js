$(document).ready(function(){
 	$('.autosuggest').keyup(function(){
		atert('It works!');
		var search_term = $(this).attr('value');
		
	});	
});