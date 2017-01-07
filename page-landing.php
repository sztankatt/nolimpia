<?php
/*
Template Name: Landing page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Facebook meta tags -->
<meta property="og:url"                content="https://nolimpia.com" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="NOlimpia" />
<meta property="og:description"        content="How much does culture influence creative thinking?" />
<meta property="og:image"              content="<?php echo get_theme_file_uri('assets/img/nolimpia-szines-fekete-negyzet.png'); ?>">
<!-- Facebook meta tags end -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Slab:700|Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/rezso.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body>
	<div id="header" class="header">
        <div id="logo" class="logo">
            <a href="">&nbsp;
            </a>
        </div>
        <ul>
            <li>
                <a href="#" data-toggle="modal" data-target="#momentum-desc">A <strong class="momentum-lila-hover">momentum</strong> szervezésében</a>
            </li>
            <li>
                <a target="_blank" href="https://www.facebook.com/nolimpiabp"><img style="margin-left:0px;" src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>"></img>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.twitter.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-02.png'); ?>"></img>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.youtube.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-03.png'); ?>"></img>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-04.png'); ?>"></img>
                </a>
            </li>
        </ul>
    </div>
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
				<div class="col col--1-of-3"><a class="olimpia-zold-hatter" href="/tamogass/">TÁMOGASS</a></div>
				
				<div class="col col--1-of-3"><a class="olimpia-voros-hatter" href="#" data-toggle="modal" data-target="#itt-ird-ala">ITT ÍRD ALÁ</a></div>
			     <div class="col col--1-of-3"><a class="olimpia-sarga-hatter" href="/vegyel-reszt/">VEGYÉL RÉSZT</a></div>
            </div>
			<div class="why-not">
			 <a href="/a-nolimpia-kampanyrol/">MIÉRT NEM AKARUNK OLIMPIÁT?<!-- <p><img src="<?php echo get_theme_file_uri('assets/img/nyil-le.png'); ?>" /></p> --></a>
			</div>
        </div>
    </div>
 <div class="modal fade" id="momentum-desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel"><?php the_title(); ?></h1>
      </div>
      <div class="modal-body">
        <?php the_content(); ?>
      </div>
    <?php
    if ( ! post_password_required() ) comments_template( '', true ); 
    endwhile; endif; ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>


</html>