<?php
/*
Template Name: Landing page
*/
?>
<?php get_header();
 ?>
<div id="landing-page-entry">
    <?php
        if (has_post_thumbnail()){
            $background = get_the_post_thumbnail_url(null, 'full');
            //echo $background;
        }
        else{
            $background = get_theme_file_uri('assets/img/olimpia-athen-sotet.png');
        }
    ?>
    <div class="top-page" style="background-image: url('<?php echo $background ?>');">
        <div class="landing-container">
			<div class="slogan">NEM AZ OLIMPIÁRA, IGEN A JÖVŐNKRE!</div>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row video-row">
          <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div class="iframe-container">
                  <iframe src="https://www.google.com/maps/d/embed?mid=1apzOnW6kccr7MY3vpkNGE3J-Bu0" frameborder="0" allowfullscreen></iframe>
              </div>
          </div>
      </div>

        </div>
      </div>
			<div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 col-lg-offset-3 col-lg-6">
          <div class="row">
              <div class="col-xs-4"><a class="olimpia-zold-hatter" href="/<?php echo get_post_field('post_name', 53)?>/">TÁMOGASS</a></div>

            <div class="col-xs-4"><a class="olimpia-voros-hatter" href="/<?php echo get_post_field('post_name', 63)?>/">ÍRD ALÁ</a></div>
               <div class="col-xs-4"><a class="olimpia-sarga-hatter" href="/<?php echo get_post_field('post_name', 55)?>/">CSATLAKOZZ</a></div>
                </div>   

            </div>
      </div>
			<div class="why-not">
				<!--TODO: Avoid hardcoded URL-->
			 <a id="why-not-button" href="#budapesti-olimpia-cikkek">MIÉRT NEM AKARUNK OLIMPIÁT?<p><img src="<?php echo get_theme_file_uri('assets/img/nyil-le.png'); ?>" /></p></a>
			</div>
        </div>
    </div>
</div>
<div id="budapesti-olimpia-cikkek" class="feed-container container-fluid front-page-transition">

	<?php get_template_part('page-feed-articles'); ?>
  </div>



<!-- MODALS -->
<div class="modal fade" id="momentum-desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">
            <?php
                $id = 188;
                $post = get_post($id);
                $title = apply_filters('the_title', $post->post_title);
                echo $title;
            ?>
        </h1>
      </div>
      <div class="modal-body">
        <?php
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
        ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="itt-ird-ala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">
            <?php
                $id = 63;
                $post = get_post($id);
                $title = apply_filters('the_title', $post->post_title);
                echo $title;
            ?>
        </h1>
      </div>
      <div class="modal-body">
        <?php
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
</body>


</html>
