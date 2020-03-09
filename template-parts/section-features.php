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