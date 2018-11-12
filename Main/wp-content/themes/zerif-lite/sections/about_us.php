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
				<p class="lead">If you are looking to upgrade your McAfee Antivirus Product older version to newer version then every time you need to <b>Uninstall McAfee Antivirus</b> from your device, also you need to Uninstall McAfee while you are looking Reinstallation of McAfee antivirus on your device. Uninstallation is the very simple process you need to visit at official website of McAfee which is <a href="http://activate-support.us/mcafee-com-activate/">mcafee.com/activate</a> and you can download the McAfee Antivirus Removal Tool, either you can follow the given steps which help to Uninstall McAfee.</p>
				<ul class="listBullet">
	<li>
	You need to open your Device and press <b>"Window+R"</b> and enter control panel in <b>"Run box"</b>
	</li><li>Then you will get window of control panel in this you need to click on Programme icon
	</li><li>After this you need to click on default programme then you will get the list of <b>installed </b>. 
	</li><li>In the installed programme list you need to find out the McAfee Aantivirus on your device 
	</li><li>Then right click on McAfee Icon and click on uninstall.</li>
	</ul>
				<p class="lead">Many of user-facing issue while having activating McAfee because they are not aware of the process of activation and try to <b>Install McAfee Antivirus</b> on your device then they need to face some error code like error code 0, <b>McAfee activation product key</b>, and they have also facing error code 12152 or 7305 etc.
	If you are facing the issue or unable to uninstall mcafee antivirus then you need to connect with the technician via live Mcafee Support Chat<a href="http://activate-support.us/mcafee-com-activate/"> or toll-free number they will guide you the best solution which helps you to uninstallation process and also guide to activation process of mcafee. The benefits of purchasing mcafee are that having the great support team which is available 24*7.</a></p>
    <p class="lead">If you need support some other product of McAfee which is mention below then you need to follow the "URL" and connect with the technician over there.</p>
	<ul class="listBullet">
	<li>
	<b>McAfee Total Protection: www.mcafee.com/mtp/retailcardb
	</li><li>McAfee Livesafe: www.mcafee.com/mls/retailcard
	</li><li>McAfee Antivirus Plus: www.mcafee.com/mav/retailcard
	</li><li>McAfee Internet Security: www.mcafee.com/mis/retailcard</b></li>
	</ul>
	</p><p class="lead">Activate-Support.us is working with the experienced team of techno genies who are proficient in the eradication of all sorts of PC errors and troubleshoot computer problems. The dedicated techno geeks at the company tend to deliver high-quality service at the much reasonable rate.</p>
          </div



		</div>

	
	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_about_us_trigger(); ?>

</section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>
