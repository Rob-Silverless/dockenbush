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

                    <div class="text-center mt2 local-images">

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