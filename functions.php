<?php

function basic_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation', 'footer' => 'Footer Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'basic_setup');

function basic_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	//wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', true);
	//wp_enqueue_script('match-height', get_template_directory_uri().'/js/jquery.matchHeight-min.js', array(), '', true);
	//wp_enqueue_script('scrollreveal', get_template_directory_uri().'/js/scrollreveal.min.js', array(), '', true);
	//wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '', true);
	//wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/js/smooth-scroll.min.js', array(), '', true);
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'basic_scripts');

// Include Custom Post-types for Wordpress
include 'inc/ctp.php';

// Bootstrap navwalker
require_once 'inc/wp-bootstrap-navwalker.php';

