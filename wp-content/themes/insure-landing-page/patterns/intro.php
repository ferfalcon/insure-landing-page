<?php
/**
 * Title: Intro
 * Slug: insure-landing-page/intro
 * Categories: featured
 * Inserter: false
 *
 * @package Insure_Landing_Page
 */

$assets = trailingslashit( get_theme_file_uri( 'assets/images' ) );
?>

<!-- wp:html -->
<section class="insure-intro" id="plans" aria-labelledby="insure-title">
	<div class="insure-intro__inner">
		<picture class="insure-intro__media">
			<source media="(min-width: 48rem)" srcset="<?php echo esc_url( $assets . 'image-intro-desktop.jpg' ); ?>">
			<img src="<?php echo esc_url( $assets . 'image-intro-mobile.jpg' ); ?>" alt="Family of four holding hands while walking together on a wet sidewalk against a white brick wall">
		</picture>

		<div class="insure-intro__copy">
			<h1 class="insure-title" id="insure-title">Humanizing your insurance.</h1>
			<p>Get your life insurance coverage easier and faster. We blend our expertise and technology to help you find the plan that is right for you. Ensure you and your loved ones are protected.</p>
			<a class="insure-button" href="#plans">View plans</a>
		</div>
	</div>
</section>
<!-- /wp:html -->
