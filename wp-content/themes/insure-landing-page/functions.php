<?php
/**
 * Theme setup and assets.
 *
 * @package Insure_Landing_Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme styles in the block editor.
 */
function insure_landing_page_editor_styles() {
	add_editor_style(
		array(
			'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Karla:wght@400;700&display=swap',
			'style.css',
			'assets/css/intro.css',
			'assets/css/features.css',
			'assets/css/work-cta.css',
			'assets/css/footer.css',
		)
	);
}
add_action( 'after_setup_theme', 'insure_landing_page_editor_styles' );

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
			'insure-landing-page-intro',
			get_theme_file_uri( 'assets/css/intro.css' ),
			array( 'insure-landing-page' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'insure-landing-page-features',
			get_theme_file_uri( 'assets/css/features.css' ),
			array( 'insure-landing-page' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'insure-landing-page-work-cta',
			get_theme_file_uri( 'assets/css/work-cta.css' ),
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
