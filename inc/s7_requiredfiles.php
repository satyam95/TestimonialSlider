<?php

function s7_enqueued_assets() {

	//Style
	
	wp_enqueue_style('owl.carousel', plugins_url(). '/s7_cpt_testimonial/owlcarousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owl.theme', plugins_url(). '/s7_cpt_testimonial/owlcarousel/assets/owl.theme.default.min.css');
	wp_enqueue_style('style', plugins_url(). '/s7_cpt_testimonial/assets/css/style.css');

	//Scrts
	wp_enqueue_script('jquery', plugins_url(). '/s7_cpt_testimonial/owlcarousel/vendors/jquery.min.js');
	wp_enqueue_script('owl-carousel-script', plugins_url(). '/s7_cpt_testimonial/owlcarousel/owl.carousel.min.js');
	wp_enqueue_script('custom-script', plugins_url(). '/s7_cpt_testimonial/assets/js/custom-script.js');

}

add_action( 'wp_enqueue_scripts', 's7_enqueued_assets' );