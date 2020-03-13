<div class="booking-form sticky pl2 pr2 pb2 pt2 mr1 ml1">
    <?php echo do_shortcode("[hb_booking_form]"); ?>
</div>
<div class="container-fluid">

<div id="rooms">

<?php if( have_rows('bedrooms') ): while( have_rows('bedrooms') ): the_row();   ?>

<?php
$background = get_sub_field( 'background_colour' );?>

    <div class="row mb1 pl1 pr1">

        <div class="room-card__carousel col-12 col-md-8 pl0 pr0">

            

            <div class="standard owl-carousel owl-theme">

                <?php
            $images = get_sub_field('images');
            foreach ($images as $image):?>

                <div class="room-card__carousel__item" style="background-image:url(<?php echo $image['url']; ?>);">

                </div>

                <?php endforeach;?>

            </div>

            

        </div>

        <div class="col-12 col-md-4 pt4 pl3 pr3 pb4 <?php echo $background?> room-card__content">

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