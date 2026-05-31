<?php
/**
 * Title: Features
 * Slug: insure-landing-page/features
 * Categories: featured
 * Inserter: false
 *
 * @package Insure_Landing_Page
 */

$assets = trailingslashit( get_theme_file_uri( 'assets/images' ) );
?>

<!-- wp:html -->
<section class="features insure-container" aria-labelledby="features-title">
	<h2 class="section-title" id="features-title">We are different</h2>

	<div class="features__grid">
		<article class="feature-card">
			<h3>Snappy Process</h3>
			<p>Our application process can be completed in minutes, not hours. Do not get stuck filling in tedious forms.</p>
			<img src="<?php echo esc_url( $assets . 'icon-snappy-process.svg' ); ?>" alt="">
		</article>

		<article class="feature-card">
			<h3>Affordable Prices</h3>
			<p>We do not want you worrying about high monthly costs. Our prices may be low, but we still offer the best coverage possible.</p>
			<img src="<?php echo esc_url( $assets . 'icon-affordable-prices.svg' ); ?>" alt="">
		</article>

		<article class="feature-card">
			<h3>People First</h3>
			<p>Our plans are not full of conditions and clauses to prevent payouts. We make sure you are covered when you need it.</p>
			<img src="<?php echo esc_url( $assets . 'icon-people-first.svg' ); ?>" alt="">
		</article>
	</div>
</section>
<!-- /wp:html -->
