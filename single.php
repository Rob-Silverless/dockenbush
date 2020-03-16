<?php
/**
 * The template for displaying all single posts
 *
 * @package Dockenbush
 */

get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

	<div id="page">

		<!-- ******************* Hero Content ******************* -->

		<?php get_template_part( 'template-parts/bookings-hero' );?>

		<div class="booking-form pl2 pr2 pb2 pt2 mr1 ml1">
		    <?php echo do_shortcode('[hb_booking_form]'); ?>
		</div>

<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php
get_footer();
