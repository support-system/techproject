<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package zerif-lite
 */

?>

</div><!-- .site-content -->

<?php zerif_before_footer_trigger(); ?>

<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<?php zerif_footer_widgets_trigger(); ?>

	<div class="container">

		<?php zerif_top_footer_trigger(); ?>

		<?php
			$footer_sections = 0;

		

			$zerif_socials_facebook  = get_theme_mod( 'zerif_socials_facebook' );
			$zerif_socials_twitter   = get_theme_mod( 'zerif_socials_twitter' );
			$zerif_socials_linkedin  = get_theme_mod( 'zerif_socials_linkedin' );
			$zerif_socials_behance   = get_theme_mod( 'zerif_socials_behance' );
			$zerif_socials_dribbble  = get_theme_mod( 'zerif_socials_dribbble' );
			$zerif_socials_instagram = get_theme_mod( 'zerif_socials_instagram' );

			$zerif_accessibility = get_theme_mod( 'zerif_accessibility' );
			$zerif_copyright     = get_theme_mod( 'zerif_copyright' );

			$zerif_powered_by = true;

		if ( ! empty( $zerif_address ) || ! empty( $zerif_address_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_email ) || ! empty( $zerif_email_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_phone ) || ! empty( $zerif_phone_icon ) ) {
			$footer_sections ++;
		}
		if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {
			$footer_sections ++;
		}

		if ( $footer_sections == 1 ) {
			$footer_class = 'col-md-12';
		} elseif ( $footer_sections == 2 ) {
			$footer_class = 'col-md-6';
		} elseif ( $footer_sections == 3 ) {
			$footer_class = 'col-md-4';
		} elseif ( $footer_sections == 4 ) {
			$footer_class = 'col-md-3';
		} else {
			$footer_class = 'col-md-3';
		}


			// open link in a new tab when checkbox "accessibility" is not ticked
			$attribut_new_tab = ( isset( $zerif_accessibility ) && ( $zerif_accessibility != 1 ) ? ' target="_blank"' : '' );

		if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {

			echo '<div class="' . $footer_class . ' copyright">';
			if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ) {

				echo '<ul class="social">';

				/* facebook */
				if ( ! empty( $zerif_socials_facebook ) ) {
					echo '<li id="facebook"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_facebook ) . '"><span class="sr-only">' . __( 'Facebook link', 'zerif-lite' ) . '</span> <i class="fa fa-facebook"></i></a></li>';
				}
				/* twitter */
				if ( ! empty( $zerif_socials_twitter ) ) {
					echo '<li id="twitter"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_twitter ) . '"><span class="sr-only">' . __( 'Twitter link', 'zerif-lite' ) . '</span> <i class="fa fa-twitter"></i></a></li>';
				}
				/* linkedin */
				if ( ! empty( $zerif_socials_linkedin ) ) {
					echo '<li id="linkedin"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_linkedin ) . '"><span class="sr-only">' . __( 'Linkedin link', 'zerif-lite' ) . '</span> <i class="fa fa-linkedin"></i></a></li>';
				}
				/* behance */
				if ( ! empty( $zerif_socials_behance ) ) {
					echo '<li id="behance"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_behance ) . '"><span class="sr-only">' . __( 'Behance link', 'zerif-lite' ) . '</span> <i class="fa fa-behance"></i></a></li>';
				}
				/* dribbble */
				if ( ! empty( $zerif_socials_dribbble ) ) {
					echo '<li id="dribbble"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_dribbble ) . '"><span class="sr-only">' . __( 'Dribble link', 'zerif-lite' ) . '</span> <i class="fa fa-dribbble"></i></a></li>';
				}
				/* instagram */
				if ( ! empty( $zerif_socials_instagram ) ) {
					echo '<li id="instagram"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_instagram ) . '"><span class="sr-only">' . __( 'Instagram link', 'zerif-lite' ) . '</span> <i class="fa fa-instagram"></i></a></li>';
				}

				echo '</ul><!-- .social -->';
			}

			
			
			echo '</div>';

		}

		zerif_bottom_footer_trigger();
		?>
	</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->

<?php zerif_after_footer_trigger(); ?>

	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->

<?php
/**
 *  Fix for sections with widgets not appearing anymore after the hide button is selected for each section
 */

if ( is_customize_preview() ) {

	if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourfocus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-aboutus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourteam' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-testimonials' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-testimonials' );
		echo '</div>';
	}
}

?>

<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

</body>

</html>
