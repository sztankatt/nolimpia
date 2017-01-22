<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:image" content="<?php echo  get_theme_file_uri('assets/img/nolimpia-szines-fekete-negyzet.png')?>" />
<?php wp_head(); ?>
<meta name="google-site-verification" content="4qLgh1J2R4ZuuIG72KClYMfHOEdbc5yL0wJB021ACYw" />
</head>

<body <?php body_class(); ?>>
<? if (is_front_page()): get_template_part('top-menu-landing'); endif ?>
<?php include_once('top-menu.php'); ?>


<div class="modal fade" id="momentum-desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">
            <?php
                $id = 188;
                $post_mom = get_post($id);
                $title = apply_filters('the_title', $post_mom->post_title);
                echo $title;
            ?>
        </h1>
      </div>
      <div class="modal-body">
        <?php
            $content = apply_filters('the_content', $post_mom->post_content);
            echo $content;
        ?>
      </div>
    </div>
  </div>
</div>
