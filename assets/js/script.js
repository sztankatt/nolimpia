/* removing height and width elements from img */

$(document).ready(function(){

	$('img').each(function(){ 
		$(this).removeAttr('width')
		$(this).removeAttr('height');
	});

	$('a').filter(function() {
	   return this.hostname && this.hostname !== location.hostname;
	}).attr('target', '_blank');

});