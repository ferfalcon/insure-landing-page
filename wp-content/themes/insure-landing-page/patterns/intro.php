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

<!-- wp:group {"tagName":"section","anchor":"plans","ariaLabel":"Humanizing your insurance","className":"insure-intro"} -->
<section id="plans" aria-label="Humanizing your insurance" class="wp-block-group insure-intro"><!-- wp:group {"className":"insure-intro__inner"} -->
	<div class="wp-block-group insure-intro__inner"><!-- wp:group {"className":"insure-intro__media"} -->
		<div class="wp-block-group insure-intro__media"><!-- wp:image {"url":"<?php echo esc_url( $assets . 'image-intro-mobile.jpg' ); ?>","alt":"Family of four holding hands while walking together on a wet sidewalk against a white brick wall","className":"insure-intro__image insure-intro__image--mobile"} -->
			<figure class="wp-block-image insure-intro__image insure-intro__image--mobile"><img src="<?php echo esc_url( $assets . 'image-intro-mobile.jpg' ); ?>" alt="Family of four holding hands while walking together on a wet sidewalk against a white brick wall" width="375" height="451" /></figure>
			<!-- /wp:image -->

			<!-- wp:image {"url":"<?php echo esc_url( $assets . 'image-intro-desktop.jpg' ); ?>","alt":"Family of four holding hands while walking together on a wet sidewalk against a white brick wall","className":"insure-intro__image insure-intro__image--desktop"} -->
			<figure class="wp-block-image insure-intro__image insure-intro__image--desktop"><img src="<?php echo esc_url( $assets . 'image-intro-desktop.jpg' ); ?>" alt="Family of four holding hands while walking together on a wet sidewalk against a white brick wall" width="540" height="650" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"insure-intro__copy"} -->
		<div class="wp-block-group insure-intro__copy"><!-- wp:heading {"level":1,"anchor":"insure-title","className":"insure-title"} -->
			<h1 class="wp-block-heading insure-title" id="insure-title">Humanizing your insurance.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Get your life insurance coverage easier and faster. We blend our expertise and technology to help you find the plan that is right for you. Ensure you and your loved ones are protected.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"insure-intro__actions"} -->
			<div class="wp-block-buttons insure-intro__actions"><!-- wp:button {"url":"#plans","className":"insure-intro__button"} -->
				<div class="wp-block-button insure-intro__button"><a class="wp-block-button__link wp-element-button" href="#plans">View plans</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
