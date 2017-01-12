<?php 
add_shortcode('payment_details', 'payment_shortcode_handler');
add_shortcode('adatok', 'adatok_shortcode_handler');
add_shortcode('ervek', 'ervek_shortcode_handler');
add_shortcode('gyik', 'gyik_shortcode_handler');
add_shortcode('social_media_share', 'social_media_share_handler');
add_shortcode('iframe', 'iframe_handler');

function social_media_share_handler($atts, $content = null){
	ob_start(); ?>
		<a class="social-media-share" href="http://www.facebook.com/sharer.php?u=https://nolimpia.com">
	        <img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>" alt="Facebook" />
	    </a>
	    
	    <a class="social-media-share" href="https://twitter.com/share?url=https://nolimpia.com&amp;text=NOlimpia&amp;hashtags=nolimpiabp">
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
	if($type != 'erv' && $type != 'adat' && $type != 'gyik'){
		return;
	}
	$i = 1;
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
					<img class="arrow-down" src="<?php echo get_theme_file_uri('assets/img/le_nyil.png'); ?>" /><?php echo $i . ". " . $post->post_title ?>
					</a>
				</h4>
			</div>
			<div id="post-collapse-<?php echo $post->ID?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="post-heading-<?php echo $post->ID?>">
				<div class="panel-body">
				<?php 
					remove_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 10, 3 );
					add_filter('img_caption_shortcode', 'ervek_img_caption_shortcode', 10, 3);
					echo do_shortcode($post->post_content) ?>
				</div>
			</div>
		</div>
		<?php
		$i = $i + 1;
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

function gyik_shortcode_handler($atts, $content=null){
	return get_ervek_or_adatok('gyik');
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
    . '<div class="col-sm-3 article-img-caption match-height col-xl-offset-1 col-xl-2 col-xxl-offset-2 col-xxl-2">'
    . $attr['caption']
    . '</div>'
    . '<div class="col-sm-9 col-md-7 article-img match-height col-xl-6 col-xxl-5">'
    . '<div ' . $attr['id']
    . 'class="article-img-container" >'
    . do_shortcode( $content )
    // . '<p class="wp-caption-text">' . $attr['caption'] . '</p>'
    . '</div></div></div><div class="row"><div class="col-xl-offset-3 col-xl-6 col-sm-offset-3 col-md-7 col-sm-9 article col-xxl-offset-4 col-xxl-5">';

}

function ervek_img_caption_shortcode( $empty, $attr, $content ){
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

    return '<div class="ervek-image-container">'
    . '<div ' . $attr['id']
    . 'class="ervek-image" >'
    . do_shortcode( $content )
    . '</div>'
    . '<div class="ervek-image-caption">' . $attr['caption'] . '</div>'
    . '</div>';

}

function iframe_handler($atts, $content){
	$a = shortcode_atts(array(
		'src' => ''), $atts);

	if ($a['src'] == '') return;
	ob_start(); ?>
		<div class="iframe-container">
		<iframe style="border: 0;" src="<?php echo $a['src'] ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
	<?php
	return ob_get_clean();
}