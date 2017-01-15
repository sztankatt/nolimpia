<div class="container-fluid footer
	<?php if (is_front_page()): echo ' front-page-transition'; endif //If loaded on the front page, add class front-page-transition
 ?>
		">
  <div class="row">
  	<div class="col col--1-of-3 col--m-1-of-2"><div class="copyright">Copyright &copy; Momentum Egyesület, 2017. Minden jog fenntartva.</div></div>
  	<div class="col col--1-of-3 col--push-1-of-3 col--m-1-of-2 col--m-no-push img-container">
  		<img src="<?php echo get_theme_file_uri('assets/img/momentum-feher-transparent.png'); ?>" />
  	</div>
  </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_theme_file_uri('assets/js/script.js?1100'); ?>"></script>
<!--Load frontpage.js if viewing the main url-->
<?php if (is_front_page()): echo '<script src="' . get_theme_file_uri('assets/js/frontpage.js?1000') . '"></script>'; endif ?>
<?php wp_footer(); ?>
</body>
</html>
