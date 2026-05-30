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

	<footer class="insure-footer">
		<div class="insure-footer__inner insure-container">
			<div class="insure-footer__brand">
				<a class="insure-logo" href="#" aria-label="Insure home">
					<img src="<?php echo esc_url( $assets . 'logo.svg' ); ?>" alt="Insure">
				</a>

				<nav aria-label="Social links">
					<ul class="social-list">
						<li><a href="#" aria-label="Facebook"><img src="<?php echo esc_url( $assets . 'icon-facebook.svg' ); ?>" alt=""></a></li>
						<li><a href="#" aria-label="Twitter"><img src="<?php echo esc_url( $assets . 'icon-twitter.svg' ); ?>" alt=""></a></li>
						<li><a href="#" aria-label="Pinterest"><img src="<?php echo esc_url( $assets . 'icon-pinterest.svg' ); ?>" alt=""></a></li>
						<li><a href="#" aria-label="Instagram"><img src="<?php echo esc_url( $assets . 'icon-instagram.svg' ); ?>" alt=""></a></li>
					</ul>
				</nav>
			</div>

			<div class="footer-nav-grid">
				<nav class="footer-nav" aria-labelledby="footer-company">
					<h2 id="footer-company">Our company</h2>
					<ul>
						<li><a href="#how-we-work">How we work</a></li>
						<li><a href="#">Why Insure?</a></li>
						<li><a href="#plans">View plans</a></li>
						<li><a href="#">Reviews</a></li>
					</ul>
				</nav>

				<nav class="footer-nav" aria-labelledby="footer-help">
					<h2 id="footer-help">Help me</h2>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Cookies</a></li>
					</ul>
				</nav>

				<nav class="footer-nav" aria-labelledby="footer-contact">
					<h2 id="footer-contact">Contact</h2>
					<ul>
						<li><a href="#">Sales</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Live chat</a></li>
					</ul>
				</nav>

				<nav class="footer-nav" aria-labelledby="footer-other">
					<h2 id="footer-other">Others</h2>
					<ul>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Press</a></li>
						<li><a href="#">Licenses</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</div>
<!-- /wp:html -->
