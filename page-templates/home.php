<?php
/**
 * ============== Template Name: Home
 *
 * @package Dockenbush
 */
get_header();?>


<div id=" page">

<!-- ******************* Hero Content ******************* -->



    <div class="wrapper-hero ml1 mr1 mt1 mb1">
        <div class="owl-carousel hero-slider">
        <?php if( have_rows('hero_slider') ): while( have_rows('hero_slider') ): the_row();   ?>
            <?php $hero_image = get_sub_field('image'); ?>
            <div class="hero-slider__item" style="background-image:url(<?php echo $hero_image['url'];?>)"></div>
        <?php endwhile; endif; ?>
        </div>
        <h1 class="heading heading__xl heading__light text-center font700 heading__caps"><?php the_field('heading');?></h1>
        <h2 class="heading heading__xl heading__light text-center font300 heading__caps"><?php the_field('sub_heading');?></h2>
    </div>

<div id="first" class="container">

<!-- ******************* Intro Content ******************* -->
<div id="about"></div>

    <div class="leader text-center mb3 mt5">

        <?php get_template_part( 'template-parts/logo' );?>

        <div class="row">

            <div class="col-sm-6 offset-sm-3 col-10 offset-1 text-center mt2">

                    <div class="content">

                        <div class="content__lead">

                            <?php the_field('about_copy');?>

                        </div>

                        <a class="openTrigger">Read More</a>

                       <div class="content__hidden">

                            <?php the_field('about_copy_more');?>

                            <a class="closeTrigger">Read Less</a>

                       </div>


                    </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid">

<div id="rooms">

<?php if( have_rows('bedrooms') ): while( have_rows('bedrooms') ): the_row();   ?>

<?php
$background = get_sub_field( 'background_colour' );?>

    <div class="row mb1 pl1 pr1">

        <div class="room-card__carousel col-8 pl0 pr0">

            

            <div class="standard owl-carousel owl-theme">

                <?php
            $images = get_sub_field('images');
            foreach ($images as $image):?>

                <div class="room-card__carousel__item" style="background-image:url(<?php echo $image['url']; ?>);">

                </div>

                <?php endforeach;?>

            </div>

            

        </div>

        <div class="col-4 pt4 pl3 pr3 pb4 <?php echo $background?> room-card__content">

            <div class="row">

                <div class="col-12">

                    <h4 class="heading heading__md heading__light mb1 room-title"><?php the_sub_field('room_title');?></h4>

                </div>

                <div class="col-12">

                    <?php the_sub_field('room_description');?>

                </div>

                <div class="col-12">

                    <a href="#contact" type="button" class="button mt1 mb1 button__light"><span>Enquire Now</span></a>

                </div>

            </div>

        </div>

    </div>

<?php endwhile; endif; ?>
</div>

<div class="container">
    <div class="offset-2 col-8">
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

<!-- ******************* Gallery  ******************* -->
<div id="gallery"></div>

    <div class="row"><!--Gallery Block -->

        <div class="col-lg-12">

        <?php
        $images = get_field('gallery');
        if( $images ): ?>

            <div class="gallery">

            <?php foreach( $images as $image ): ?>

            <a href="<?php echo $image['url']; ?>" class="lodge-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"></a>

            <?php endforeach; ?>

        </div>

        <?php endif; ?>

        </div>

    </div><!--row-->

<!-- ******************* Features  ******************** -->

<div id="features"></div>
<div class="container mb5 mt2">
    <div class="row">
        <?php if( have_rows('features') ){
            $featureRow = 0;
            while( have_rows('features') ){
                $featureRow++;
                the_row();
                if($featureRow % 5 == 0){;?>
                    <div class="col text-center mb2 pr2 pl2 feature-item">
                        <div class="pb1"><img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('heading');?>"/></div>
                        <div class="heading heading__caps heading__xs"><?php the_sub_field('heading');?></div>
                    </div>
                    <div class="w-100"></div>
                <?php  } else { ;?>
                    <div class="col text-center mb2 pr2 pl2 feature-item">
                        <div class="pb1"><img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('heading');?>"/></div>
                        <div class="heading heading__caps heading__xs"><?php the_sub_field('heading');?></div>
                    </div>
                <?php }
            }
        } ;?>
    </div>
</div>

<!-- ******************* CTA  ************************* -->

<?php if((get_field("call_to_action_heading")) || (get_field("call_to_action_image"))):
$image = get_field('call_to_action_image');;?>
<div class="container-fluid text-center pb5 pt7 cta" style="background-image: url(<?php echo $image['url']; ?>);">
    <div class="col pb2">
        <h4 class="heading heading__light heading__caps heading__md font700"><?php the_field('call_to_action_heading');?></h4>
    </div>
    <div class="col">
        <a href="#contact" type="button" class="button mt1 mb1 button__light"><span>Enquire Now</span></a>
    </div>
</div>
<?php endif ;?>


<!-- ******************* Local Area  ********************* -->

<div id="local"></div>

    <div class="leader text-center mb10 mt5 container">

        <div class="row">

            <div class="col-sm-6 offset-sm-3 col-10 offset-1 text-center mt2">

                    <h3 class="heading heading__caps heading__lg font700 heading__alt-color pb1">Local Area</h3>

                    <div class="content">

                        <div class="content__lead">

                            <?php the_field('local_area_copy');?>

                        </div>

                        <a class="openTrigger">Read More</a>

                       <div class="content__hidden">

                            <?php the_field('local_area_copy_more');?>

                            <a class="closeTrigger">Read Less</a>

                       </div>


                    </div>

                    <div class="text-center mt2">

                    <?php if (have_rows('local_area_images')):
                            while (have_rows('local_area_images')) : the_row();
                            $icon = get_sub_field('icon');
                      ?>

                      

                          <img src="<?php echo $icon['url']?>" class="ml2 mr2" />

                      


                    <?php endwhile;  endif; ?>

                    </div>

            </div>

        </div>

    </div>

</div>

<!-- ******************* Things to do  **************** -->

<div class="container-fluid pl1 pr1 pb1">
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
        <div class="col-12 pr2 pl2  things-container">
            <div class="row">
                <div class="col-8 pt2 pb2" style="border-right:1px solid white">
                    <div class="heading heading__sm heading__caps heading__tertiary-color pb2">Click to explore the area</div>
                    <ul class="things-container__list">
                    <?php if( have_rows('things_to_do_list') ): while( have_rows('things_to_do_list') ): the_row();   ?>
                        <li class="heading heading__caps heading__light heading__xs font700"><?php the_sub_field('title');?></li>
                    <?php endwhile;  endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ******************* Map Panel  ******************* -->

<div class="container-fluid pl1 pr1 pb1">

    <?php echo do_shortcode('[wp_mapbox_gl_js map_id="107"]');?>

</div>

<!-- ******************* Contact ******************* -->

<div id="contact">

    <div class="contact-section ml1 mr1 mb1 row pb2 pr2 pl2 pt2  align-items-center">

        <div class="col-6">

                 <h4 class="heading heading__md heading__light heading__caps font300 pb2">Contact Us</h4>

                <div class="heading heading__sm heading__caps heading__light pb1 font700">Dockenbush Cottage</div>
                <div class="heading heading__xs heading__caps heading__light pb2"><?php the_field('address', 'option');?></div>

                <div class="heading heading__xs heading__caps heading__light pb1">
                    E: <a href="mailto:<?php the_field('email_address', 'option');?>" class="heading heading__caps heading__light"><?php the_field('email_address', 'option');?></a>
                </div>

                <div class="heading heading__xs heading__caps heading__light">
                    T: <a href="mailto:<?php the_field('telephone_number', 'option');?>" class="heading heading__caps heading__light"><?php the_field('telephone_number', 'option');?></a>
                </div>

            </div>

        <div class="col-4 contact-form ">
                <div class="pl2">

                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>

                </div>

            </div>

    </div>

</div>

<?php get_footer();?>
