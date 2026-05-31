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

<!-- wp:group {"tagName":"footer","className":"insure-footer"} -->
<footer class="wp-block-group insure-footer"><!-- wp:group {"className":"insure-footer__inner insure-container"} -->
<div class="wp-block-group insure-footer__inner insure-container"><!-- wp:group {"className":"insure-footer__brand"} -->
<div class="wp-block-group insure-footer__brand"><!-- wp:image {"url":"<?php echo esc_url( $assets . 'logo.svg' ); ?>","alt":"Insure","href":"#","className":"insure-logo"} -->
<figure class="wp-block-image insure-logo"><a href="#"><img src="<?php echo esc_url( $assets . 'logo.svg' ); ?>" alt="Insure"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"tagName":"nav","ariaLabel":"Social links"} -->
<nav aria-label="Social links" class="wp-block-group"><!-- wp:group {"className":"social-list"} -->
<div class="wp-block-group social-list"><!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-facebook.svg' ); ?>","alt":"Facebook","href":"#","className":"social-list__icon"} -->
<figure class="wp-block-image social-list__icon"><a href="#"><img src="<?php echo esc_url( $assets . 'icon-facebook.svg' ); ?>" alt="Facebook"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-twitter.svg' ); ?>","alt":"Twitter","href":"#","className":"social-list__icon"} -->
<figure class="wp-block-image social-list__icon"><a href="#"><img src="<?php echo esc_url( $assets . 'icon-twitter.svg' ); ?>" alt="Twitter"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-pinterest.svg' ); ?>","alt":"Pinterest","href":"#","className":"social-list__icon"} -->
<figure class="wp-block-image social-list__icon"><a href="#"><img src="<?php echo esc_url( $assets . 'icon-pinterest.svg' ); ?>" alt="Pinterest"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"url":"<?php echo esc_url( $assets . 'icon-instagram.svg' ); ?>","alt":"Instagram","href":"#","className":"social-list__icon"} -->
<figure class="wp-block-image social-list__icon"><a href="#"><img src="<?php echo esc_url( $assets . 'icon-instagram.svg' ); ?>" alt="Instagram"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"footer-nav-grid"} -->
<div class="wp-block-group footer-nav-grid"><!-- wp:group {"tagName":"nav","ariaLabel":"Our company","className":"footer-nav"} -->
<nav aria-label="Our company" class="wp-block-group footer-nav"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Our company</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="#how-we-work">How we work</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Why Insure?</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#plans">View plans</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Reviews</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","ariaLabel":"Help me","className":"footer-nav"} -->
<nav aria-label="Help me" class="wp-block-group footer-nav"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Help me</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="#">FAQ</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Terms of use</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Privacy policy</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Cookies</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","ariaLabel":"Contact","className":"footer-nav"} -->
<nav aria-label="Contact" class="wp-block-group footer-nav"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Contact</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="#">Sales</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Support</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Live chat</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","ariaLabel":"Others","className":"footer-nav"} -->
<nav aria-label="Others" class="wp-block-group footer-nav"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Others</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><a href="#">Careers</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Press</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Licenses</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
