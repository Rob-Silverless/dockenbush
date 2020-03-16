<?php $hero_image = get_field('hero_image'); ?>

<?php if( $hero_image ){ ?>

<div class="h50 ml1 mr1 mt1 mb1 page_hero" style="background-image:url(<?php echo $hero_image['url'];?>)">
    <div class="container col-24 hero-content">
    	<div class="col">
    		<h1 class="heading heading__xl heading__light text-center font700 heading__caps"><?php the_field('page_title');?></h1>
    	</div>
    </div>
</div>

<?php } ?>