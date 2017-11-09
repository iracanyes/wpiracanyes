<?php
function wp_base_theme_setup(){
    /*
        Ajout du champs 'Image à la Une' dans les articles
    */
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wp_base_theme_setup');

/*
 * Activation de la gestion de menus +
 * Ajout de régions pour mes menus
 */
register_nav_menus(
    array(
        'main-menu' => 'Menu principal',
        'footer-menu' => 'Menu du footer',
        'categories-menu' => 'Menu des catégories'
    )
);

/*
 * Permet d'afficher les sous-menus en leur attribuant les classes CSS
 * utile à l'affichage.
*/

function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');
 