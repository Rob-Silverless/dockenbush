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

		<div class="pl2 pr2 pb2 pt2 mr1 ml1">
			<div class="container cols-offset-2-10">
				<div class="col">
					<div id="about"></div>

					    <div class="leader text-center mb3 mt5">

					        <div class="row">

					            <div class="col-sm-6 offset-sm-3 col-10 offset-1 text-center mt2">

					                    <div class="content">

					                        <div class="content__lead">

					                            <?php the_field('content');?>

					                        </div>

					                        <a class="openTrigger">Read More</a>

					                       <div class="content__hidden">

					                            <?php the_field('content_more');?>

					                            <a class="closeTrigger">Read Less</a>

					                       </div>


					                    </div>

					            </div>

					        </div>

					    </div>

					</div>
				</div>
			</div>
		</div>

	</div><!-- #primary -->

<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php
get_footer();
