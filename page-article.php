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
		<div class="left-sidebar col col--1-of-5">
			<?php get_sidebar(); ?>
		</div>
		<div class="col col--4-of-5 article-title">
			<?php the_title(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col col--3-of-5 col--push-1-of-5 article">
			<?php edit_post_link(); ?>
			<?php the_content(); ?>	
	

		</div>
	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>