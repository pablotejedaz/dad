<?php

function hola_mundo() {
    echo "Hola mundo";
}

function test_menus_register() {
    register_nav_menus(array(
        'main_menu'=> 'Menu Principal',
        'footer_menu' => 'Menu Footer',
        'lateral_menu' => 'Menu Lateral',
        ));
    }

add_action('after_setup_theme','test_menus_register');

function test_scripts_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'test_scripts_styles');

?>
