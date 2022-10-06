<?php

function sumotop_styles()
{
    wp_enqueue_style('sumotop_style_bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('sumotop_font_awesome_icons', get_theme_file_uri('/assets/css/font-awesome.min.css'));
    wp_enqueue_style('sumotop_elegant_icons', get_theme_file_uri('/assets/css/elegant-icons.css'));
    wp_enqueue_style('sumotop_style_jquery_ui', get_theme_file_uri('/assets/css/jquery-ui.min.css'));
    wp_enqueue_style('sumotop_style_magnific_popup', get_theme_file_uri('/assets/css/magnific-popup.css'));
    wp_enqueue_style('sumotop_style_owl_carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('sumotop_style_slicknav', get_theme_file_uri('/assets/css/slicknav.min.css'));
    wp_enqueue_style('sumotop_style_main', get_stylesheet_uri());

    // Script
    wp_enqueue_script('sumotop_script_jquery', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_magnific_popup', get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_jquery_ui', get_theme_file_uri('/assets/js/jquery-ui.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_mixitup', get_theme_file_uri('/assets/js/mixitup.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_countdown', get_theme_file_uri('/assets/js/jquery.countdown.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_slicknav', get_theme_file_uri('/assets/js/jquery.slicknav.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_owl_carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_nicescroll', get_theme_file_uri('/assets/js/jquery.nicescroll.min.js'), NULL, '1.0', true);
    wp_enqueue_script('sumotop_script_main', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'sumotop_styles');

function sumotop_setup_theme()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sumotop_setup_theme');
