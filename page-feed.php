<?php
/*
Template Name: Feed page
*/

get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$image_url = get_the_post_thumbnail_url(196, 'full');
?>

<div class="feed-container container-fluid">
	<div class="row feed-first-row">
		<div class="col col--1-of-4 left-sidebar col--m-2-of-5">
			<?php get_sidebar(); ?>
		</div>
		<div class="col col--3-of-4 col--m-3-of-5 main-article" style="background-image: url('<?php echo $image_url ?>');">
			<a href="#" class="article-title">Vajon egy budapesti olimpia mindenki szamara kifizetodo? Talalgatasok, elmelkedesek, adatok.</a>
		</div>
	</div>
	<div class="row feed-second-row">

	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>