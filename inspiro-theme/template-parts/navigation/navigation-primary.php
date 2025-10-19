<?php
/**
 * Displays top navigation
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

$search_show        = inspiro_get_theme_mod( 'header_search_show' );
$search_display     = $search_show ? 'block' : 'none';

$header_layout_type = inspiro_get_theme_mod( 'header-layout-type' );
$header_menu_style  = inspiro_get_theme_mod( 'header-menu-style' );

?>
<div id="site-navigation" class="navbar">
	<div class="header-inner inner-wrap <?php echo sanitize_html_class( $header_layout_type ); ?> <?php echo sanitize_html_class( $header_menu_style ); ?>">

		<div class="header-logo-wrapper">
			<?php inspiro_custom_logo(); ?>
		</div>
		
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<div class="header-navigation-wrapper">
				<nav class="primary-menu-wrapper navbar-collapse collapse" aria-label="<?php echo esc_attr_x( 'Top Horizontal Menu', 'menu', 'inspiro' ); ?>" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'menu_class'     => 'nav navbar-nav dropdown sf-menu',
								'theme_location' => 'primary',
								'container'      => '',
							)
						);
					?>
					<div style="position: relative; margin-top: 3px;">
						<a href="https://www.instagram.com/collectifminuit12/" target="_blank" style="position: absolute;top: -41px;right: -35px;font-size: 20px;">
							<i class="fab fa-instagram" style="font-family: 'Font Awesome 5 Brands'; font-weight: 400;"></i>
						</a>
						<a href="https://www.youtube.com/@collectifminuit12/featured" target="_blank" style="position: absolute;top: -41px;right: -70px;font-size: 20px;">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
					<script>
						const userAgent = window.navigator.userAgent;
						
						if (userAgent.indexOf("Win") !== -1) {
							document.body.className += " windows-os";
						} else {
							document.body.className += " non-windows-os";
						}
						</script>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var imageContainers = document.querySelectorAll("figure.wp-caption");

							imageContainers.forEach(function(container) {
								var imageUrl = container.querySelector("a").getAttribute("href");

								container.querySelector("figcaption").addEventListener("click", function() {
									window.location.href = imageUrl;
								});
							});
						});
					</script>
				</nav>
			</div>
		<?php endif ?>
		
		<div class="header-widgets-wrapper">
			<?php if ( is_active_sidebar( 'header_social' ) ) : ?>
				<div class="header_social">
					<?php dynamic_sidebar( 'header_social' ); ?>
				</div>
			<?php endif ?>

			<div id="sb-search" class="sb-search" style="display: <?php echo esc_attr( $search_display ); ?>;">
				<?php get_template_part( 'template-parts/header/search', 'form' ); ?>
			</div>

			<?php if ( has_nav_menu( 'primary' ) || is_active_sidebar( 'sidebar' ) ) : ?>
				<button type="button" class="navbar-toggle">
					<span class="screen-reader-text"><?php esc_html_e( 'Toggle sidebar &amp; navigation', 'inspiro' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<?php endif ?>
		</div>
	</div><!-- .inner-wrap -->
</div><!-- #site-navigation -->
