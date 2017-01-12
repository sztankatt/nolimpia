<?php
/*
Template Name: Article page
*/
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="section container-fluid main-section">
	<div class="row article-header" style="background-image: url('<?php
			if ( has_post_thumbnail() ) {
				echo get_the_post_thumbnail_url(null, 'full');
			} else {
				echo get_the_post_thumbnail_url(196, 'full');
			}
			?>'); ">
		<div class="left-sidebar col-sm-3 match-height col-xl-offset-1 col-xl-2 col-xxl-offset-2">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-sm-9 match-height col-xxl-8">
			<div class="article-title">
			<?php the_title(); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="article col-sm-8 col-sm-offset-3 col-md-6 col-md-offset-3 col-xl-6 col-xl-offset-3 col-xxl-offset-4 col-xxl-5">
			<?php edit_post_link(); ?>
			<?php the_content(); ?>	
	

		</div>
	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>