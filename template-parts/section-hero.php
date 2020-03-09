<div class="wrapper-hero ml1 mr1 mt1 mb1">
    <div class="owl-carousel hero-slider">
    <?php if( have_rows('hero_slider') ): while( have_rows('hero_slider') ): the_row();   ?>
        <?php $hero_image = get_sub_field('image'); ?>
        <div class="hero-slider__item" style="background-image:url(<?php echo $hero_image['url'];?>)"></div>
    <?php endwhile; endif; ?>
    </div>
    <div class="container col-24 hero-content">
    	<div class="col">
    		<h1 class="heading heading__xl heading__light text-center font700 heading__caps"><?php the_field('heading');?></h1>
    		<h2 class="heading heading__xl heading__light text-center font300 heading__caps"><?php the_field('sub_heading');?></h2>
    	</div>
    </div>
</div>