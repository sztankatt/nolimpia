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
			<div class="slogan">
        <?php
        if($_GET['lang'] == 'en'){
          echo "NO ... YES!";
        } else {
          echo "NEM AZ OLIMPIÁRA, IGEN A JÖVŐNKRE!";
        }
        ?>

      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
          <div class="row video-row">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2 col-lg24-offset-3 col-lg24-18">
                <div class="iframe-container map-container">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1apzOnW6kccr7MY3vpkNGE3J-Bu0" frameborder="0" allowfullscreen></iframe>
                </div>
                <p class="help-block help-block-lila">
                <?php
                if($_GET['lang'] == 'en'){
                  echo "Click the stands on the map to check the stands' operation times!";
                } else {
                  echo "Kattints a térképen levő pultokra ahhoz, hogy megtudd pontosan mettől meddig leszünk kint a helyszíneken!";
                }?>
                </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2">
          <div class="row cat-button-container video-row">
            <div class="cat-button col-xs-4 "><a class="olimpia-zold-hatter" href="/<?php echo get_post_field('post_name', 53)?>/"><?php echo trans('támogass');?></a></div>

            <div class="cat-button col-xs-4 "><a class="olimpia-voros-hatter" href="/<?php echo get_post_field('post_name', 63)?>/"><?php echo trans('írd alá');?></a></div>

            <div class="cat-button col-xs-4 "><a class="olimpia-sarga-hatter" href="/<?php echo get_post_field('post_name', 55)?>/"><?php echo trans('csatlakozz');?></a></div>
            <div class="cat-button col-xs-12"><a id="why-not-button" class="" href="#budapesti-olimpia-cikkek">
            <?php
            if($_GET['lang'] == 'en'){
              echo "WHY ARE WE AGAINST HAVING AN OLYMPICS IN BUDAPEST?";
            } else {
              echo "MIÉRT NEM AKARUNK OLIMPIÁT?";
            }?>
            <p class="arrow">  <img src="<?php echo get_theme_file_uri('assets/img/nyil-le.png'); ?>" /></p>
            </a></div>
          </div>
        </div>
      </div>
        
    </div>
</div>
<div id="budapesti-olimpia-cikkek" class="feed-container container-fluid front-page-transition">

<?php get_template_part('page-feed-articles'); ?>

<?php get_footer(); ?>
</body>


</html>
