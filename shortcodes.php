<?php 
add_shortcode('payment_details', 'payment_shortcode_handler');
add_shortcode('adatok', 'adatok_shortcode_handler');
add_shortcode('ervek', 'ervek_shortcode_handler');
add_shortcode('social_media_share', 'social_media_share_handler');

function social_media_share_handler($atts, $content = null){
	ob_start(); ?>
		<a href="http://www.facebook.com/sharer.php?u=https://nolimpia.com" onclick="window.open(this.href, 'mywin',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0');">
	        <img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>" alt="Facebook" />
	    </a>
	    
	    <a href="https://twitter.com/share?url=https://nolimpia.com&amp;text=NOlimpia&amp;hashtags=nolimpiabp" onclick="window.open(this.href, 'mywin',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0');">
        <img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-02.png'); ?>" alt="Twitter" />
    </a>
	<?php
	return ob_get_clean();
}

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
		'order' => 'DESC'
	));?>
	<div class="panel-group" id="postok-<?php echo $type ?>">
	<?php	foreach($posts as $post){ ?>
		
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="post-heading-<?php echo $post->ID?>">
				<h4 class="panel-title">
					<a class="collapsed" role="button" data-parent="#postok-<?php echo $type ?>" data-toggle="collapse" href="#post-collapse-<?php echo $post->ID?>" aria-controls="post-collapse-<?php echo $post->ID?>">
					<img class="arrow-down" src="<?php echo get_theme_file_uri('assets/img/le_nyil.png'); ?>" /><?php echo $post->post_title ?>
					</a>
				</h4>
			</div>
			<div id="post-collapse-<?php echo $post->ID?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="post-heading-<?php echo $post->ID?>">
				<div class="panel-body">
				<?php 

					remove_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 10, 3 );
					echo do_shortcode($post->post_content) ?>
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
}

function my_img_caption_shortcode( $empty, $attr, $content ){
    $attr = shortcode_atts( array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr );

    if ( 1 > (int) $attr['width'] || empty( $attr['caption'] ) ) {
        return '';
    }

    if ( $attr['id'] ) {
        $attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
    }

    return '</div></div><div class="row">'
    . '<div class="col col--1-of-5 article-img-caption">'
    . $attr['caption']
    . '</div>'
    . '<div class="col col--3-of-5 article-img">'
    . '<div ' . $attr['id']
    . 'class="article-img-container" >'
    . do_shortcode( $content )
    // . '<p class="wp-caption-text">' . $attr['caption'] . '</p>'
    . '</div></div></div><div class="row"><div class="col col--3-of-5 col--push-1-of-5 article">';

}