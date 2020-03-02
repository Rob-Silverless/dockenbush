<?php
/**
 * ============== Template Name: Home
 *
 * @package Dockenbush
 */
get_header();?>


<div id=" page">

<!-- ******************* Hero Content ******************* -->

<?php $heroImage = get_field('hero_image');?>

    <div class="wrapper-hero ml1 mr1 mt1 mb1" style="background-image: url(<?php echo $heroImage['url']; ?>);">

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

<!-- ******************* Card Fullwidth ******************* -->
<div id="rooms"></div>

<?php if( have_rows('bedrooms') ): while( have_rows('bedrooms') ): the_row();   ?>

<?php if( get_sub_field('display_format') == 'full-width' ): ?>

        <div class="room-card <?php the_sub_field('display_format');?>">

            <div class="room-card__carousel standard owl-carousel owl-theme">

            <?php
            $images = get_sub_field('images');
            foreach ($images as $image):?>

                <div class="room-card__carousel__item">

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                </div>

                <?php endforeach;?>

            </div>

            <div class="room-card__content">



                <div class="row">

                    <div class="col-10 offset-1">

                        <h4 class="heading heading__md heading__alt-color mb1 room-title"><?php the_sub_field('room_title');?></h4>

                    </div>

                    <div class="col-sm-4 offset-sm-1 col-10 offset-1">

                        <?php the_sub_field('room_description');?>

                    </div>

                    <div class="col-sm-6 offset-sm-1 col-10 offset-1 icon-list">

                        <?php get_template_part( 'template-parts/icon', 'list' );?>

                    </div>

                    <div class="col-sm-6 offset-sm-1 col-10 offset-1">

                        <a href="#contact" type="button" class="button mt1 mb1"><span>Enquire Now</span></a>

                    </div>

                </div>

            </div>

    </div><!--card-->

<?php endif; ?>

<!-- ******************* Card 3/4  ******************* -->

<?php if( get_sub_field('display_format') == 'three-quarters' ): ?>

    <div class="room-card <?php the_sub_field('display_format');?>">

        <div class="row">

            <div class="col-sm-8">

                <div class="room-card__carousel standard owl-carousel owl-theme">

                <?php
                $images = get_sub_field('images');
                foreach ($images as $image):?>

                    <div class="room-card__carousel__item" style="background-image: url(<?php echo $image['url']; ?>);" alt="<?php echo $image['alt'];?>">

                    </div>

                    <?php endforeach;?>

                </div>

            </div>

            <div class="col-sm-4 offset-sm-0 col-10 offset-1">

                <div class="room-card__content">

                    <h4 class="heading heading__md heading__alt-color mb1 mt1 room-title"><?php the_sub_field('room_title');?></h4>

                    <?php the_sub_field('room_description');?>

                    <div class="icon-list">

                        <?php get_template_part( 'template-parts/icon', 'list' );?>

                    </div>

                    <a href="#contact" type="button" class="button mt1 mb1"><span>Enquire Now</span></a>

                </div>

            </div>

        </div><!--r-->

    </div><!--card-->

<?php endif; ?>

<!-- ******************* Card 1/2  ******************* -->

<?php if( get_sub_field('display_format') == 'half' ): ?>

    <div class="room-card <?php the_sub_field('display_format');?>">

        <div class="row">

            <div class="col-sm-6">

                <div class="room-card__carousel standard owl-carousel owl-theme">

                <?php
                $images = get_sub_field('images');
                foreach ($images as $image):?>

                    <div class="room-card__carousel__item" style="background-image: url(<?php echo $image['url']; ?>);" alt="<?php echo $image['alt'];?>">

                    </div>

                    <?php endforeach;?>

                </div>

            </div>

            <div class="col-sm-6 offset-sm-0 col-10 offset-1">

                <div class="room-card__content">

                    <h4 class="heading heading__md heading__alt-color mb1 mt1 room-title"><?php the_sub_field('room_title');?></h4>

                    <?php the_sub_field('room_description');?>

                    <div class="icon-list">

                        <?php get_template_part( 'template-parts/icon', 'list' );?>

                    </div>

                    <a href="#contact" type="button" class="button mt1 mb1"><span>Enquire Now</span></a>

                </div>

            </div>

        </div><!--r-->

    </div><!--card-->

<?php endif; ?>

<?php endwhile; endif; ?>

<div class="owl-carousel testimonial-slider">
  <?php if (have_rows('testimonial', 'option')):
        while (have_rows('testimonial', 'option')) : the_row();
  ?>

    <div class="testimonial-slider__item">



      <p><span class="quotemarks">"</span><?php the_sub_field('testimonial', 'option');?><span class="quotemarks">"</span>
      <span><?php the_sub_field('attribution', 'option');?></span>
      </p>

      <div id="countdown">
          <svg>
              <circle r="18" cx="20" cy="20"></circle>
          </svg>
      </div>

    </div>
  <?php endwhile;  endif; ?>
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

<!-- ******************* Multi Panel  ******************* -->
<div id="nairobi"></div>

<section class="multi-panel">

	<div class="multi-panel__top-section">

		<h3 class="heading heading__md heading__alt-color text-center mb2">Things to Do In Nairobi</h3>

			<?php if( have_rows('tabs') ):
                $row = 1;
				while( have_rows('tabs') ): the_row();?>

				    <a href="#<?php echo $row; ?>" role="tab" data-toggle="tab" class="<?php if($row == 1) {echo 'active';}?> multi-panel__trigger">

				        <div class="<?php if($row == 1) {echo 'active';}?>">

    						<img src="<?php the_sub_field('icon'); ?>"/>

    						<h2 class="heading heading__xs heading__alt-color-grey text-center mb2"><?php the_sub_field('heading'); ?></h2>

                        </div>

					</a>

				<?php $row++; endwhile; ?>

			<?php endif; ?>

    </div><!--top section-->

	<div class="multi-panel__lower-section">

			<?php if( have_rows('tabs') ): ?>

            <div class="tab-content" id="myTabContent">

				<?php $row = 1; // number rows ?>

				<?php while( have_rows('tabs') ): the_row();?>

					<div class="tab-pane fade show <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>" role="tabpanel">

						<div class="multi-panel__lower-section__panel">

                            <div class="room-card__carousel standard owl-carousel owl-theme">

                                <?php
                                $images = get_sub_field('images');
                                foreach ($images as $image):?>

                                    <div class="room-card__carousel__item" style="background-image: url(<?php echo $image['url']; ?>);" alt="<?php echo $image['alt'];?>">

                                    </div>

                                <?php endforeach;?>

                            </div>

							<div class="content">

							<h3 class="heading heading__md heading__alt-color mb1"><?php the_sub_field('activity_heading');?></h3>

							<?php the_sub_field('activity_description');?>

							</div>

						</div>

				    </div>

                <?php $row++; endwhile;?>

			</div>

		<?php endif;?>


	</div>

</section><!--bottom section-->

<!-- ******************* Map Panel  ******************* -->

<?php echo do_shortcode('[wp_mapbox_gl_js map_id="819"]');?>

<div id="contact"></div>

<div class="contact-section">

    <div class="row">

        <div class="col-12">

            <h4 class="heading heading__md heading__alt-color text-center">Contact Us</h4>

        </div>

        <div class="col-sm-3 offset-sm-1 col-10 offset-1">

                <p><strong><?php the_field('telephone_number', 'option');?></strong></p>

                <p><strong><?php the_field('email_address', 'option');?></strong></p>

                <p><strong><?php the_field('address', 'option');?></strong></p>

            </div>

        <div class="col-sm-4 offset-sm-0 col-10 offset-1">

                <?php echo do_shortcode('[contact-form-7 id="537" title="Main Contact Form"]');?>

            </div>

    </div>

</div>

<?php get_footer();?>
