<?php
/**
 * The template for displaying all pages
 *
 * @package Dockenbush
 */

get_header();
?>
<!-- ******************* Hero Content ******************* -->

		<?php get_template_part( 'template-parts/bookings-hero' );?>


<div class="container">

    <div class="row">
        
        <div class="col-12" style="background: hsl(0, 0%, 100%); margin-top: 1em; margin-bottom:3em; padding: 2em;">
        
            <?php the_field('page_content');?>
        
        </div>
    
    </div>

</div>

<?php get_footer();?>
        




