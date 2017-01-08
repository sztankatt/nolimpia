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
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Slab:700|Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/rezso.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/marco.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />


</head>

<body <?php body_class(); ?>>
<?php include_once('top-menu.php'); ?>
<!-- <div id="header" class="header header-white">
    <div id="logo" class="logo">
        <a href="/">&nbsp;
        </a>
    </div>
    <ul>
        <li>
          <a href="/nepszavazas-a-2024-budapesti-olimpia-ellen-itt-ird-ala/" class="olimpia-voros">itt írd alá</a>
        </li>
        <li>
          <a href="/nepszavazas-2024-budapesti-olimpia-ellen-tamogass/" class="olimpia-zold">támogass</a>
        </li>
        <li>
          <a href="/nepszavazas-2024-budapest-olimpia-csatlakozz-aktivista/" class="olimpia-sarga">vegyél részt</a>

        </li>
        <li>
            <a href="#" class="momentum-lila-hover" data-toggle="modal" data-target="#momentum-desc">momentum</a>
        </li>
        <li>
          <a href="#">kapcsolat</a>
        </li>

        <li>
            <a target="_blank" href="https://www.facebook.com/nolimpiabp"><img style="margin-left:0px;" src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>"></img>
            </a>
        </li>
        <li>
            <a  target="_blank" href="https://www.twitter.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-02.png'); ?>"></img>
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
</div> -->
<div class="modal fade" id="momentum-desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">
            <?php 
                $id = 14;
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