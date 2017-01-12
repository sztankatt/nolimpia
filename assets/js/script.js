/* removing height and width elements from img */

$(document).ready(function(){

	$('img').each(function(){ 
		$(this).removeAttr('width')
		$(this).removeAttr('height');
	});

	$('a').filter(function() {
	   return this.hostname && this.hostname !== location.hostname;
	}).attr('target', '_blank');


	$('.article-img').parent().children('.match-height').matchHeight();

	$('.feed-first-row div').matchHeight();
	// $('.feed-second-row div').matchHeight();
	$('.feed-third-row div').matchHeight();
	$('.article-header .match-height').matchHeight();
	console.log($('.article-heaer .match-height').html());
	
	$('.footer .row .col').matchHeight();

	$('#why-not-button').click(function(event){
		$href = $(this).attr('href');

		event.preventDefault();
		$('#white-header').css('position', 'relative');
		$('#landing-page-next').show();
		$('#landing-page-entry').slideUp(1000, function(){
			document.location.pathname = $href;
	
		});

	});

	$('.article a span').css('font-weight', '700');

	$(function () {
	    $('.panel-group').on('shown.bs.collapse', function (e) {
	        var offset = $('.panel.panel-default > .panel-collapse.in').offset();
	        if(offset) {
	            $('html,body').animate({
	                scrollTop: $('.panel-title a').offset().top -20
	            }, 500); 
	        }
	    }); 
	});

	$('.social-media-share').click(function(event){
		event.preventDefault();
		
		window.open($(this).attr('href'), 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0');
	});
});