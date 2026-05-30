<?php
/**
 * Title: Footer
 * Slug: insure-landing-page/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: false
 *
 * @package Insure_Landing_Page
 */

$assets = trailingslashit( get_theme_file_uri( 'assets/images' ) );
?>

<!-- wp:html -->
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
<!-- /wp:html -->
