<?php
/**
 * Title: Insure landing page
 * Slug: insure-landing-page/landing-page
 * Categories: featured
 * Inserter: false
 *
 * @package Insure_Landing_Page
 */

$assets = trailingslashit( get_theme_file_uri( 'assets/images' ) );
?>

<!-- wp:html -->
<div class="insure-landing-page">
	<main>
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

		<section class="work-cta insure-container" id="how-we-work" aria-labelledby="work-title">
			<div class="work-cta__inner">
				<h2 id="work-title">Find out more about how we work</h2>
				<a class="insure-button" href="#how-we-work">How we work</a>
			</div>
		</section>
	</main>
</div>
<!-- /wp:html -->
