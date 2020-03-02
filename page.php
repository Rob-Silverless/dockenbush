<?php
/**
 * The template for displaying all pages
 *
 * @package Dockenbush
 */

get_header();
?>

<div class="container">

<a href="<?php echo get_home_url(); ?>" type="button" class="button mt1 mb1"><span>Back To Site</span></a>

<h1 class="heading heading__xl heading__light heading__alt-font" style="margin-top: 0.5em;"><?php the_title();?></h1>

    <div class="row">
        
        <div class="col-12" style="background: hsl(0, 0%, 100%); margin-top: 1em; margin-bottom:3em; padding: 2em;">
        
            <?php the_field('page_content');?>
        
        </div>
    
    </div>

</div>

<?php get_footer();?>
        




