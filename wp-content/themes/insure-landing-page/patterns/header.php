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

$assets = trailingslashit( get_theme_file_uri( 'assets/images' ) );
?>

<!-- wp:html -->
<header class="insure-header">
	<input class="nav-toggle-input" type="checkbox" id="primary-nav-toggle" aria-label="Toggle navigation">
	<div class="insure-header__inner insure-container">
		<a class="insure-logo" href="#" aria-label="Insure home">
			<img src="<?php echo esc_url( $assets . 'logo.svg' ); ?>" alt="Insure">
		</a>

		<label class="nav-toggle" for="primary-nav-toggle" aria-hidden="true">
			<span class="nav-toggle__icon"></span>
		</label>

		<nav class="primary-nav" aria-label="Primary navigation">
			<ul class="primary-nav__list">
				<li><a href="#how-we-work">How we work</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Account</a></li>
				<li><a class="insure-button insure-button--dark" href="#plans">View plans</a></li>
			</ul>
		</nav>
	</div>
</header>
<!-- /wp:html -->
