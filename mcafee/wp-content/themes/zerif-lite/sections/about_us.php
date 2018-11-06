<?php
/**
 * About us section
 *
 * @package zerif-lite
 */

zerif_before_about_us_trigger();

$zerif_aboutus_show = get_theme_mod( 'zerif_aboutus_show' );

echo '<section class="about-us ' . ( ( is_customize_preview() && ( ! isset( $zerif_aboutus_show ) || $zerif_aboutus_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="aboutus">';

?>

	<?php zerif_top_about_us_trigger(); ?>

	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<?php

			/* Title */
			zerif_about_us_header_title_trigger();

			/* Subtitle */
			zerif_about_us_header_subtitle_trigger();

			?>

		</div>
		
		<div class="row">

		<div class="col-md-12  aboutContent">
            <h2 class="featurette-heading aligncenter">How to uninstall McAfee antivirus?</h2>
            <h3 class="subText aligncenter mb2">we are happy to help you</h4>
				<p class="lead">If you are looking to upgrade your mcafee antivirus product older version to newer version then every time you need to uninstall mcafee antivirus from your device, also you need to uninstall McAfee antivirus while you are looking reinstallation of McAfee antivirus on your device. Uninstallation is the very simple process you need to visit at official website of McAfee which is mcafee.com/activate and you can download the McAfee antivirus removal tool, either you can follow the given steps which help to uninstall McAfee.</p>
				<ul class="listBullet">
	<li>
	You need to open your Device and press "Window+R" and enter control panel in "Run box"
	</li><li>Then you will get window of control panel in this you need to click on Programme icon
	</li><li>After this you need to click on default programme then you will get the list of installed programme. 
	</li><li>In the installed programme list you need to find out the mcafee antivirus on your device 
	</li><li>Then right click on mcafee antivirus and click on uninstall.</li>
	</ul>
				<p class="lead">Many of user-facing issue while having activated McAfee antivirus because they are not aware of the process of activation and try to install McAfee antivirus on your device then they need to face some error code like error code 0, McAfee activation product key, and they have also facing error code 12152 or 7305 etc.
	If you are facing the issue or unable to uninstall mcafee antivirus then you need to connect with the technician via live mcafee support chat or toll-free number they will guide you the best solution which helps you to uninstallation process and also guide to activation process of mcafee. The benefits of purchasing mcafee are that having the great support team which is available 24*7.</p>
	<p class="lead">If you need support some other product of mcafee which is mention below then you need to follow the "URL" and connect with the technician over there.</p>
	<ul class="listBullet">
	<li>
	mcafee total protection: www.mcafee.com/mtp/retailcard
	</li><li>mcafee livesafe: www.mcafee.com/mls/retailcard
	</li><li>mcafee antivirus plus: www.mcafee.com/mav/retailcard
	</li><li>mcafee internet security: www.mcafee.com/mis/retailcard</li>
	</ul>
	</p><p class="lead">Activate-Support.us is working with the experienced team of techno genies who are proficient in the eradication of all sorts of PC errors and troubleshoot computer problems. The dedicated techno geeks at the company tend to deliver high-quality service at the much reasonable rate.</p>
          </div



		</div>

	
	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_about_us_trigger(); ?>

</section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>
