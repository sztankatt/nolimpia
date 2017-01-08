<?php 
add_shortcode('payment_details', 'payment_shortcode_handler');
add_shortcode('adatok', 'adatok_shortcode_handler');
add_shortcode('ervek', 'ervek_shortcode_handler');

function payment_shortcode_handler($atts, $content = null){
	ob_start();
	?>
		<form class="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="WHHE37EPVHKBC">
			<input class="paypal-button-img" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	<?php
	return ob_get_clean();
}

function get_ervek_or_adatok($type){
	if($type != 'erv' && $type != 'adat'){
		return;
	}
	ob_start();
	$posts = get_posts(array(
		'post_type' => $type,
		'numberposts' => -1,
		'order' => 'ASC'
	));?>
	<div class="panel-group" id="postok-<?php $type ?>">
	<?php	foreach($posts as $post){ ?>
		
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="post-heading-<?php echo $post->ID?>">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-parent="#postok-<?php $type ?>" data-toggle="collapse" href="#post-collapse-<?php echo $post->ID?>" aria-controls="post-collapse-<?php echo $post->ID?>">
					<img class="arrow-down" src="<?php echo get_theme_file_uri('assets/img/le_nyil.png'); ?>" /><?php echo $post->post_title ?>
					</a>
				</h4>
			</div>
			<div id="post-collapse-<?php echo $post->ID?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="post-heading-<?php echo $post->ID?>">
				<div class="panel-body">
				<?php echo $post->post_content ?>
				</div>
			</div>
		</div>
		<?php

		} ?>
	</div>

	<?php return ob_get_clean();


}

function adatok_shortcode_handler($atts, $content=null){
	return get_ervek_or_adatok('adat');
}

function ervek_shortcode_handler($atts, $content=null){
	return get_ervek_or_adatok('erv');
	ob_start();?>

	<p>TEST</p>
	<?php
	return ob_get_clean();
}