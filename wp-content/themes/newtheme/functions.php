<?php

function load_stylesheets()
{
    wp_register_style(
        "bootstrap",
        get_template_directory_uri() . "/css/bootstrap.min.css",
        array(),
        false,
        "all"
    );
    wp_enqueue_style("bootstrap");


    wp_register_style(
        "stylesheet",
        get_template_directory_uri() . "/style.css",
        array(),
        false,
        "all"
    );
    wp_enqueue_style("stylesheet");
}
add_action("wp_enqueue_scripts", "load_stylesheets");

function load_jquery()
{
    wp_deregister_script("jquery");
    wp_enqueue_script("jquery", get_template_directory_uri()."/js/jquery-3.4.min.js", array(), false);
  
}

add_action("wp_enqueue_scripts",  "load_jquery");

function loadjs()
{
    wp_register_script("customjs", get_template_directory_uri()."/js/scripts.js",array(), false, false);
    wp_enqueue_script("customjs");
   
}
add_action("wp_enqueue_scripts", "loadjs");

add_theme_support("menus");

add_theme_support("post-thumbnails");

register_nav_menus(

    array(

        "top-menu" => __("Top Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme")
    )
);

add_image_size("smallest", 300, 300, true);
add_image_size("largest", 800, 1000, true);

add_action( 'init', 'custom_bootstrap_slider' );


?>