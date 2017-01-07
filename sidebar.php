<ul class="nav nav-pills nav-stacked nav-left">
   <?php
	$menu_name = 'main-menu';
	if($menu = wp_get_nav_menu_object($menu_name)){
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		foreach ( (array) $menu_items as $key => $menu_item ) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
		}
	}
	else{
		$menu_list = '<li>ERROR: main-menu does not exist</li>';
	}

	echo $menu_list;
   ?>
</ul>