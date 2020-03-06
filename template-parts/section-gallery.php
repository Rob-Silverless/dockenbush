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