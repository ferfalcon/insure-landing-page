<?php

/**
 * Title: Header
 * Slug: insure-landing-page/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: false
 *
 * @package Insure_Landing_Page
 */

$assets = trailingslashit(get_theme_file_uri('assets/images'));
?>

<!-- wp:group {"tagName":"header","className":"insure-header"} -->
<div class="wp-block-group insure-header"><!-- wp:group {"className":"insure-header__inner insure-container"} -->
	<div class="wp-block-group insure-header__inner insure-container"><!-- wp:image {"url":"<?php echo esc_url($assets . 'logo.svg'); ?>","alt":"Insure","href":"#","className":"insure-logo"} -->
		<figure class="wp-block-image insure-logo"><a href="#"><img src="<?php echo esc_url($assets . 'logo.svg'); ?>" alt="Insure" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:navigation {"overlayMenu":"always","icon":"menu","hasIcon":true,"ariaLabel":"Primary navigation","className":"primary-nav","layout":{"type":"flex","justifyContent":"right"}} -->
		<!-- wp:navigation-link {"label":"How we work","url":"#how-we-work"} /-->

		<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->

		<!-- wp:navigation-link {"label":"Account","url":"#"} /-->

		<!-- wp:buttons {"className":"primary-nav__actions"} -->
		<div class="wp-block-buttons primary-nav__actions"><!-- wp:button {"url":"#plans","className":"primary-nav__button"} -->
			<div class="wp-block-button primary-nav__button"><a class="wp-block-button__link wp-element-button" href="#plans">View plans</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->