<?php

function avilon_scripts() {
    wp_enqueue_style( 'avilon-style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/animate/animate.min.css' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/lib/magnific-popup/magnific-popup.css' );

    wp_enqueue_media( get_template_directory_uri() . '/img/favicon.png' );

    wp_enqueue_media( get_template_directory_uri() . '/img/apple-touch-icon.png' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), null, true );

    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js', array(), null, true );

    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array(), null, true );

    wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), null, true );

    wp_enqueue_script( 'wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), null, true );

    wp_enqueue_script( 'superfish-hover', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array(), null, true );

    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array(), null, true );

    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/lib/magnific-popup/magnific-popup.min.js', array(), null, true );

    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/contactform/contactform.js', array(), null, true );

    wp_enqueue_script( 'js-main', get_template_directory_uri() . '/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'avilon_scripts' );