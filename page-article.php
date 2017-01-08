<?php
/*
Template Name: Article page
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="section container-fluid main-section">
	<div class="row article-header" style="background-image: url('<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail_url(null, 'full'); } ?>'); ">
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

<div class="panel-group" id="ervek">
  
  		<?php
			if($post->ID == 47 || $post->ID == 49){
				if($post->ID == 47){
					$post_type = 'erv';
				} else {
					$post_type = 'adat';
				}
				$ervek = get_posts(array(
					'post_type' => $post_type,
					'numberposts' => -1,
					'order' => 'ASC'
				));
				$i = 0;
				foreach($ervek as $erv){ ?>
				
				<div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="erv-heading-<?php echo $erv->ID?>">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-parent="#ervek" data-toggle="collapse" href="#erv-collapse-<?php echo $erv->ID?>" aria-controls="erv-collapse-<?php echo $erv->ID?>">
				          <img class="arrow-down" src="<?php echo get_theme_file_uri('assets/img/le_nyil.png'); ?>" /><?php echo $erv->post_title ?>
				        </a>
				      </h4>
				    </div>
				    <div id="erv-collapse-<?php echo $erv->ID?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="erv-heading-<?php echo $erv->ID?>">
				      <div class="panel-body">
				        <?php echo $erv->post_content ?>
				      </div>
				    </div>
				  </div>
				<?php
				$i = $i+1;
				}

			} ?>

</div>
	

		</div>
	</div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>