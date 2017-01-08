/* removing height and width elements from img */

$(document).ready(function(){

	$('img').each(function(){ 
		$(this).removeAttr('width')
		$(this).removeAttr('height');
	});

	$('a').filter(function() {
	   return this.hostname && this.hostname !== location.hostname;
	}).attr('target', '_blank');


	$('.article-img').parent().children('.col').matchHeight();

	$('#why-not-button').click(function(event){
		$href = $(this).attr('href');

		event.preventDefault();
		$('#white-header').css('position', 'relative');
		$('#landing-page-next').show();
		$('#landing-page-entry').slideUp(1000, function(){
			document.location.pathname = $href;
	
		});

	});
});