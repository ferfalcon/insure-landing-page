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

<!-- wp:group {"tagName":"section","ariaLabel":"We are different","className":"features insure-container"} -->
<section aria-label="We are different" class="wp-block-group features insure-container"><!-- wp:heading {"level":2,"anchor":"features-title","className":"section-title"} -->
<h2 class="wp-block-heading section-title" id="features-title">We are different</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"features__grid"} -->
<div class="wp-block-group features__grid"><!-- wp:group {"tagName":"article","className":"feature-card"} -->
<article class="wp-block-group feature-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Snappy Process</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our application process can be completed in minutes, not hours. Do not get stuck filling in tedious forms.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-snappy-process.svg' ); ?>","alt":""} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $assets . 'icon-snappy-process.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"feature-card"} -->
<article class="wp-block-group feature-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Affordable Prices</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We do not want you worrying about high monthly costs. Our prices may be low, but we still offer the best coverage possible.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-affordable-prices.svg' ); ?>","alt":""} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $assets . 'icon-affordable-prices.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"feature-card"} -->
<article class="wp-block-group feature-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">People First</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our plans are not full of conditions and clauses to prevent payouts. We make sure you are covered when you need it.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-people-first.svg' ); ?>","alt":""} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $assets . 'icon-people-first.svg' ); ?>" alt=""/></figure>
<!-- /wp:image --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
