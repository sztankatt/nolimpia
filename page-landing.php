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
<meta property="og:description"        content="Népszavazást kezdeményeztünk a budapesti olimpiáról, mert az erre szánt százmilliárdokat szerintünk másra kellene költeni. Segíts minket egy aláírással! " />
<meta property="og:image"              content="<?php echo get_theme_file_uri('assets/img/nolimpia-szines-fekete-negyzet.png'); ?>">
<!-- Facebook meta tags end -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Slab:700|Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/rezso.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/marco.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

</head>
<body>
<div id="landing-page-entry">
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
				<div class="col col--1-of-3"><a class="olimpia-zold-hatter" href="/nepszavazas-2024-budapesti-olimpia-ellen-tamogass/">TÁMOGASS</a></div>
				
				<div class="col col--1-of-3"><a class="olimpia-voros-hatter" href="/nepszavazas-a-2024-budapesti-olimpia-ellen-itt-ird-ala/">ITT ÍRD ALÁ</a></div>
			     <div class="col col--1-of-3"><a class="olimpia-sarga-hatter" href="/nepszavazas-2024-budapest-olimpia-csatlakozz-aktivista/">VEGYÉL RÉSZT</a></div>
            </div>
			<div class="why-not">
			 <a id="why-not-button" href="/nolimpia-budapesti-olimpia-helyett-jovo/">MIÉRT NEM AKARUNK OLIMPIÁT?<p><img src="<?php echo get_theme_file_uri('assets/img/nyil-le.png'); ?>" /></p></a>
			</div>
        </div>
    </div>
</div>
<div id="landing-page-next" style="display: none;">

    <?php include_once('top-menu.php'); ?>
</div>



<!-- MODALS -->
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_theme_file_uri('assets/js/script.js'); ?>"></script>
</body>


</html>