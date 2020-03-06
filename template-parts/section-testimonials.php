<div class="container">
    <div class="offset-md-2 col-md-8">
        <?php if (have_rows('testimonial', 'option')):?>
            <div class="testimonial-slider__quote mt5 mb2 text-center">
                <?php get_template_part("inc/img/quote"); ?>
            </div>
            <div class="owl-carousel testimonial-slider mb5">
                <?php while (have_rows('testimonial', 'option')) : the_row();?>
                    <div class="testimonial-slider__item">
                        <p><?php the_sub_field('testimonial', 'option');?></p>
                        <span class="testimonial-slider__attribution"><?php the_sub_field('attribution', 'option');?></span>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif; ?>
    </div>
</div>