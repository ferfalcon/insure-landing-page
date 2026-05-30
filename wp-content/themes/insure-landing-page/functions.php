<?php
/**
 * Theme setup and assets.
 *
 * @package Insure_Landing_Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'insure-landing-page-fonts',
			'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Karla:wght@400;700&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'insure-landing-page',
			get_stylesheet_uri(),
			array( 'insure-landing-page-fonts' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'insure-landing-page-header',
			get_theme_file_uri( 'assets/css/header.css' ),
			array( 'insure-landing-page' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'insure-landing-page-footer',
			get_theme_file_uri( 'assets/css/footer.css' ),
			array( 'insure-landing-page' ),
			wp_get_theme()->get( 'Version' )
		);
	}
);
