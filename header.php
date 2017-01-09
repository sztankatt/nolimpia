<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php include_once('top-menu.php'); ?>


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