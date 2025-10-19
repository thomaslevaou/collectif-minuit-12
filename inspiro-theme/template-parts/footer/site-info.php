<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>
			<a href="/" style="color: #78787f">Collectif Minuit 12</a>
		</span>
		<span>
			<a href="/politique-de-confidentialite/" style="color: #78787f">
				Politique de confidentialité
			</a>
		</span>
		<span style="text-align: center;">
			<a href="/contact/">
				S'inscrire à notre lettre d'informations
			</a>
		</span>
		<span>
			<span style="font-size: 1.1rem;">
				<a href="https://www.instagram.com/collectifminuit12/" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</span>
			<span style="font-size: 1.1rem;">
				<a href="https://www.youtube.com/@collectifminuit12/featured" target="_blank" style="margin-left: 25px">
					<i class="fab fa-youtube"></i>
				</a>
			</span>
			<span style="font-size: 1.1rem;">
				<a href="https://www.facebook.com/collectifminuit12/" target="_blank" style="margin-left: 25px">
					<i class="fab fa-facebook"></i>
				</a>
			</span>
			<span style="font-size: 1.1rem;">
				<a href="https://www.linkedin.com/company/collectif-minuit-12/?originalSubdomain=fr" target="_blank" style="margin-left: 25px">
					<i class="fab fa-linkedin"></i>
				</a>
			</span>
		</span>
	</span>
</div><!-- .site-info -->
