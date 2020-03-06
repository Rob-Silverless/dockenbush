<div class="container-fluid pl1 pr1 ">
    <div class="row">
        <div class="col-6">
            <div class="pb3 pt3 text-center" id="things">
                <div class="heading heading__lg heading__caps heading__tertiary-color"><?php get_template_part( 'inc/img/things' );?> <?php the_field('thigns_to_do_title');?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="pb3 pt3 text-center" id="eat">
                <div class="heading heading__lg heading__caps heading__tertiary-color"><?php get_template_part( 'inc/img/eat' );?> <?php the_field('places_to_eat_title');?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pl1 pr1 pb1">
        <div class="col-12 pr2 pl2 mt1 things-container">
            <div class="row">
                <div class="col-8 pt2 pb2" style="border-right:1px solid white">
                    <div class="heading heading__sm heading__caps heading__tertiary-color pb2">Click to explore the area</div>
                    <ul class="things-container__list">
                    <?php if( have_rows('things_to_do_list') ): while( have_rows('things_to_do_list') ): the_row();   ?>
                        <li class="heading heading__caps heading__light heading__xs font700 things-container__list-item" data-item="things-container__item-<?php echo get_row_index(); ?>"><?php the_sub_field('title');?></li>
                    <?php endwhile;  endif; ?>
                    </ul>
                </div>
                <div class="col-4 pt2 pb2 pl4 pr4  align-self-center heading__light">
                	<div id="things-container__item-0" class="things-container__item">
                		<?php the_field('things_to_do_content');?>
                	</div>
                	<?php if( have_rows('things_to_do_list') ): while( have_rows('things_to_do_list') ): the_row();   ?>
                		<div id="things-container__item-<?php echo get_row_index(); ?>" class="things-container__item">
	                		<h5 class="heading heading__light heading__md"><?php the_sub_field('title');?></h5>
	                		<p><?php the_sub_field('content');?></p>
	                		<a href="<?php the_sub_field('link');?>" target="_blank">See on map</a>
	                	</div>
                	<?php endwhile;  endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 pr2 pl2 mt1 eat-container">
            <div class="row">
                <div class="col-8 pt2 pb2" style="border-right:1px solid white">
                    <div class="heading heading__sm heading__caps heading__tertiary-color pb2">Click to explore the area</div>
                    <ul class="eat-container__list">
                    <?php if( have_rows('places_to_eat_list') ): while( have_rows('places_to_eat_list') ): the_row();   ?>
                        <li class="heading heading__caps heading__light heading__xs font700 eat-container__list-item" data-item="eat-container__item-<?php echo get_row_index(); ?>"><?php the_sub_field('title');?></li>
                    <?php endwhile;  endif; ?>
                    </ul>
                </div>
                <div class="col-4 pt2 pb2 pl4 pr4  align-self-center heading__light">
                	<div id="eat-container__item-0" class="eat-container__item">
                		<?php the_field('places_to_eat_content');?>
                	</div>
                	<?php if( have_rows('places_to_eat_list') ): while( have_rows('places_to_eat_list') ): the_row();   ?>
                		<div id="eat-container__item-<?php echo get_row_index(); ?>" class="eat-container__item">
	                		<h5 class="heading heading__light heading__md"><?php the_sub_field('title');?></h5>
	                		<p><?php the_sub_field('content');?></p>
	                		<a href="<?php the_sub_field('link');?>" target="_blank">See on map</a>
	                	</div>
                	<?php endwhile;  endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>