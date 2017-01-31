<?php
?>

<div id="header" class="header header-landing">
	<div id="logo" class="logo">
		<a href="<? if ($_GET['lang'] == 'en') { echo '?lang=en';}?>">&nbsp;
		</a>
	</div>
	<ul>
		<li>
			<a href="#" data-toggle="modal" data-target="#momentum-desc">
			<?php if($_GET['lang'] == 'en'){?>
				<span class="mobile-hide">organized by </span><strong class="momentum-lila-hover">momentum</strong>
			<?php }
			else { ?>
				<span class="mobile-hide">a </span><strong class="momentum-lila-hover">momentum</strong><span class="mobile-hide"> szervezésében</span>
			<?php } ?>

			</a>
		</li>
		<li class="mobile-hide">
			<a target="_blank" href="https://www.facebook.com/nolimpiabp"><img style="margin-left:0px;" src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>"></img>
			</a>
		</li>
		<li class="mobile-hide">
			<a target="_blank" href="https://www.twitter.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-02.png'); ?>"></img>
			</a>
		</li>
		<!-- <li>
			<a target="_blank" href="https://www.youtube.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-03.png'); ?>"></img>
			</a>
		</li> -->
		<li class="mobile-hide">
			<a target="_blank" href="https://www.instagram.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-04.png'); ?>"></img>
			</a>
		</li>
		<li id="switcher" class="switcher"><?php echo do_shortcode('[asmp-switcher]');?></li>
	</ul>
</div>
