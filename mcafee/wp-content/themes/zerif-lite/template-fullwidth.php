<?php
/**
 * Template Name: Full Width Page
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>
<div class="featureImage"><?php echo get_the_post_thumbnail(); ?></div>
</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<div id="content" class="site-content">

	<div class="container">

		<?php zerif_before_page_content_trigger(); ?>

		<div class="content-left-wrap col-md-12">

			<?php zerif_top_page_content_trigger(); ?>

			<div id="primary" class="content-area">

				<main id="main" class="site-main <?php $page_title = $wp_query->post->post_title; echo strtolower($page_title) ?>">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
							endif;

						endwhile;
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php zerif_bottom_page_content_trigger(); ?>

		</div><!-- .content-left-wrap -->

		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
