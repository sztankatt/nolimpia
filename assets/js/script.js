/* removing height and width elements from img */

jQuery(document).ready(function($){

	$('img').each(function(){ 
		$(this).removeAttr('width')
		$(this).removeAttr('height');
	});

});