<div id="first" class="container">
	
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