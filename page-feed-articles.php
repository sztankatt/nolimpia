<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
$image_url = get_the_post_thumbnail_url(196, 'full');
$header_post_id = 202;
$header_post = get_post($header_post_id);

?>

	<div class="row feed-first-row">
		<div class="col-md-4 left-sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-8 main-article" style="background-image: url('<?php echo get_the_post_thumbnail_url($header_post, 'full') ?>');">
			<?php if($_GET['lang'] == 'en'){ ?>
				<a href="<?php echo get_permalink($header_post); ?>?lang=en" class="feed-article-title"><?php echo get_post_meta($header_post->ID, 'en-title', true); ?></a>
			<?php } else{ ?>
			<a href="<?php echo get_permalink($header_post); ?>" class="feed-article-title"><?php echo $header_post->post_title; ?></a>
			<?php }?>
		</div>
	</div>
	<?php
	$posts = get_posts(array(
		'post_type' => ['erv', 'post'],
		'numberposts' => -1,
		'order' => 'DESC'));

	if($_GET['lang'] == 'en'){
		$posts = posts_en($posts);
	}

	$post_num = sizeof($posts);
	if ($post_num > 3){
		$second_row_num = 3;
	} else {
		$second_row_num = $post_num;
	}?>
	<div class="row feed-second-row">
		<?php
		for($i = 0; $i < $second_row_num; $i++){
			$post = $posts[$i];
		?>
		<div class="col-md-4 col-sm-6">
			<div class="feed-article-container" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'full')?>');">
				<?php if($_GET['lang'] == 'en'){ ?>
					<a href="<?php echo get_permalink($post); ?>?lang=en" class="feed-article-title"><?php echo get_post_meta($post->ID, 'en-title', true); ?></a>
				<?php } else{ ?>
					<a href="<?php echo get_permalink($post); ?>" class="feed-article-title"><?php echo $post->post_title; ?></a>
				<?php }?>
			</div>
		</div>
		<?php }?>
	</div>
	<?php
	if ($post_num > 3){ ?>
	<div class="row feed-third-row">
		<?php for($i = 3; $i < $post_num; $i++){
			$post = $posts[$i];
			?>
			<div class="col-md-4 col-sm-6 match-height">
				<div class="feed-article-container">
					<?php if($_GET['lang'] == 'en'){ ?>
						<a href="<?php echo get_permalink($post); ?>?lang=en" class="feed-article-title"><?php echo get_post_meta($post->ID, 'en-title', true); ?></a>
					<?php } else{ ?>
						<a href="<?php echo get_permalink($post); ?>" class="feed-article-title"><?php echo $post->post_title; ?></a>
						<div class="feed-article-description"><?php echo get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);?></div>
					<?php }?>
				</div>
			</div>
		<?php }?>
	</div>
	<?php }?>


<?php endwhile; endif; ?>
