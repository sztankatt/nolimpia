<?php 
/* Post changing functions */
function change_default_posts_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Cikkek';
    $submenu['edit.php'][5][0] = 'Cikkek';
    $submenu['edit.php'][10][0] = 'Cikk hozzáadása';
    $submenu['edit.php'][16][0] = 'Cikk tag-ek';
}
function change_default_posts_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Cikkek';
    $labels->singular_name = 'Cikk';
    $labels->add_new = 'Cikk hozzáadása';
    $labels->add_new_item = 'Cikk hozzáadása';
    $labels->edit_item = 'Cikk szerkesztése';
    $labels->new_item = 'Új Cikk';
    $labels->view_item = 'Cikk megtekintése';
    $labels->search_items = 'Cikkek keresése';
    $labels->not_found = 'Cikk nem található';
    $labels->not_found_in_trash = 'Cikk nem található';
    $labels->all_items = 'Összes Cikk';
    $labels->menu_name = 'Cikkek';
    $labels->name_admin_bar = 'Cikkek';
}
 
/* New post type adding functions */
function create_ervek() {
  register_post_type( 'erv',
    array(
      'labels' => array(
        'name' => __( 'Érvek' ),
        'singular_name' => __( 'Érv' ),
        'add_new' => _('Új Érv hozzáadása'),
        'add_new_item' => _('Új Érv hozzáadása'),
        'edit_item' => _('Érv szerkesztése'),
        'new_item' => _('Új Érv'),
        'view_item' => _('Érv megtekintése'),
        'view_items' => _('Érvek megtekintése')

      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

function create_adatok() {
  register_post_type( 'adat',
    array(
      'labels' => array(
        'name' => __( 'Adatok' ),
        'singular_name' => __( 'Adat' ),
        'add_new' => _('Új Adat hozzáadása'),
        'add_new_item' => _('Új Adat hozzáadása'),
        'edit_item' => _('Adat szerkesztése'),
        'new_item' => _('Új Adat'),
        'view_item' => _('Adat megtekintése'),
        'view_items' => _('Adatok megtekintése')

      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

/* Adding changes, and new posts */
//CHANGES
add_action( 'admin_menu', 'change_default_posts_label' );
add_action( 'init', 'change_default_posts_object' );

//NEW POSTS
add_action( 'init', 'create_ervek' );
add_action( 'init', 'create_adatok');
