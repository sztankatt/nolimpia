<?php
/*
Template Name: Landing page
*/
?>
<?php get_header(); ?>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90078683-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>
<body>
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
                <div class="col-md-offset-0 col-md-12">
                    <div class="iframe-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/PN2iHd7c_As" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col col--1-of-3"><a class="olimpia-zold-hatter" href="/<?php echo get_post_field('post_name', 53)?>/">TÁMOGASS</a></div>

				<div class="col col--1-of-3"><a class="olimpia-voros-hatter" href="/<?php echo get_post_field('post_name', 63)?>/">ÍRD ALÁ</a></div>
			     <div class="col col--1-of-3"><a class="olimpia-sarga-hatter" href="/<?php echo get_post_field('post_name', 55)?>/">CSATLAKOZZ</a></div>
            </div>
			<div class="why-not">
				<!--TODO: Avoid hardcoded URL-->
			 <a id="why-not-button" href="#budapesti-olimpia-cikkek">MIÉRT NEM AKARUNK OLIMPIÁT?<p><img src="<?php echo get_theme_file_uri('assets/img/nyil-le.png'); ?>" /></p></a>
			</div>
        </div>
    </div>
</div>
	<?php get_template_part('page-feed'); ?>
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
