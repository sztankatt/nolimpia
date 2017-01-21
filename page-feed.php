<?php
/*
Template Name: Feed page
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

<div class="feed-container container-fluid">
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

<?php get_footer(); ?>
</body>


</html>
