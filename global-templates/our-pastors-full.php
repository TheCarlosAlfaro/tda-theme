<?php

/**
 * welcome Section.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- welcome-section -->

<section id="welcome-section" class="py-5">
    <div class="container">
        <h2 class="display-4 text-center"><?php the_field('our_pastors_heading'); ?></h2>
        <hr class="heading__underline mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="p--extra-height">
                        <?php the_field('our_pastors_body_text') ?>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="img-container text-center">
                        <img src="<?php the_field('pastors_portrait_img') ?>" alt="" class="img-fluid rounded pastors-portrait">
                        <p><?php the_field('our_pastors_picture_caption') ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section> 