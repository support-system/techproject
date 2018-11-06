<?php
/**
 * Our Focus section
 *
 * @package zerif-lite
 */

zerif_before_our_focus_trigger();

$zerif_ourfocus_show = get_theme_mod( 'zerif_ourfocus_show' );

echo '<section class="focus ' . ( ( is_customize_preview() && ( ! isset( $zerif_ourfocus_show ) || $zerif_ourfocus_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="focus">';

?>

	<?php zerif_top_our_focus_trigger(); ?>

	<div class="container">

		<!-- SECTION HEADER -->

		
		<div class="row">

				<?php /*
				if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {

					dynamic_sidebar( 'sidebar-ourfocus' );

				} elseif ( current_user_can( 'edit_theme_options' ) && ! defined( 'THEMEISLE_COMPANION_VERSION' ) ) {

					if ( is_customize_preview() ) {
						//translators: ThemeIsle Companion 
						printf( __( 'You need to install the %s plugin to be able to add Team members, Testimonials, Our Focus and Clients widgets.', 'zerif-lite' ), 'ThemeIsle Companion' );
					} else {
						// translators: ThemeIsle Companion install link 
						printf( __( 'You need to install the %s plugin to be able to add Team members, Testimonials, Our Focus and Clients widgets.', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=themeisle-companion' ), 'install-plugin_themeisle-companion' ) ), 'ThemeIsle Companion' ) );
					}
				}*/
				?>
				<section class="features">
<div class="container p6">
<h1 class="display-3 aligncenter ">McAfee Support | McAfee Support chat | How to install McAfee antivirus?</h1>
<p class="subText"><b>McAfee Support</b> team provides you Support while you are facing issue to Downlaod McAfee Antivirus, <a href="http://activate-support.us/how-to-activate-mcafee-antivirus/">mcafee activation issue</a>, <b>Uninstallation McAfee antivirus</b>, McAfee Error Code issues and McAfee Virus Removal Service etc. They are always with you to provide the appropiate solution while you needed just you need to call Toll Free Number <b>18554717766</b> or connect with them via McAfee Support Chat, it is live chat process where you can connect with Technician when unable to connect them via Toll-Free Number.</p>


<div class="container aligncenter divBox">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-1 featureBox"></div>
            <h2>VIRUS REMOVAL

</h2>
            <p>Virus removal Service will make your device faster & Protect your data from hacking.</p>
            <p><a class="buttonBox buttonBox-primary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
           <div class="icon-2 featureBox"></div>
            <h2>DIAGNOSIS &amp; REPAIR
</h2>
            <p>one click you can diagnose your device and repair and you will get device protection.</p>
            <p><a class="buttonBox buttonBox-primary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="icon-3 featureBox"></div>
            <h2>SETUP &amp; INSTALL
</h2>
            <p>No need to frustrate call our expert team to Setup and installation your antivirus.</p>
            <p><a class="buttonBox buttonBox-primary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>

</section>

		</div>

	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_our_focus_trigger(); ?>

</section>  <!-- / END FOCUS SECTION -->

<?php zerif_after_our_focus_trigger(); ?>
