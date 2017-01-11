<?php

?>
<div id="white-header" class="header header-white">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
            <div id="logo" class="logo">
                 <a href="/">&nbsp;
                 </a>
            </div>
          <ul class="nav navbar-nav nav-cat">
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 53)?>/" class="olimpia-zold">támogass</a></li> 
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 63)?>/" class="olimpia-voros">írd alá</a></li>
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 55)?>/" class="olimpia-sarga">vegyél részt</a></li>
        </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 53)?>/" class="olimpia-zold">támogass</a></li> 
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 63)?>/" class="olimpia-voros">írd alá</a></li>
                <li class="cat-container"><a href="/<?php echo get_post_field('post_name', 55)?>/" class="olimpia-sarga">vegyél részt</a></li>
                <li><a href="#" class="momentum-lila-hover" data-toggle="modal" data-target="#momentum-desc">momentum</a></li>
                <li><a href="/<?php echo get_post_field('post_name', 229)?>/">kapcsolat</a></li>
                <li><a target="_blank" href="https://www.facebook.com/nolimpiabp"><img style="margin-left:0px;" src="<?php echo get_theme_file_uri('assets/img/ikonok-001-01.png'); ?>"></img>
                </a><a  target="_blank" href="https://www.twitter.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-02.png'); ?>"></img>
                </a><!-- <a target="_blank" href="https://www.youtube.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-03.png'); ?>"></img>
                </a> --><a target="_blank" href="https://www.instagram.com/nolimpiabp"><img src="<?php echo get_theme_file_uri('assets/img/ikonok-001-04.png'); ?>"></img>
                </a></li>
              </ul> 
        </div>
      </div>
    </nav>
</div>