<div id="contact">

    <div class="contact-section ml1 mr1 mb1 row pb2 pr2 pl2 pt2  align-items-center">

        <div class="col-sm-12 col-md-6 text-center text-md-left pb2">

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

        <div class="col-sm-12 col-md-4 contact-form ">
                <div class="pl2">

                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');?>

                </div>

            </div>

    </div>

</div>