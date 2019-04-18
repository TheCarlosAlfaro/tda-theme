<?php

/**
 * services Section.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- welcome-section -->

<section id="services-section" class="py-5">
  <div class="container">
    <!-- <h2 class="display-4 text-center"><?php the_field('_heading'); ?></h2> -->
    <!-- <hr class="heading__underline mb-5"> -->
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="img-container text-center">
            <img src="<?php the_field('thumb_link_1_image') ?>" alt="" class="img-fluid rounded">
            <a class="btn btn-outline-secondary btn-lg btn-block my-4" href="<?php the_field('thumb_link_1_button_link') ?>" role="button"><?php the_field('thumb_link_1_button_text') ?></a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img-container text-center">

            <img src="<?php the_field('thumb_link_2_image') ?>" alt="" class="img-fluid rounded">
            <a class="btn btn-outline-secondary btn-lg btn-block my-4" href="<?php the_field('thumb_link_2_button_link') ?>" role="button"><?php the_field('thumb_link_2_button_text') ?></a>
          </div>
        </div>

        <!-- <div class="col-md-4">
          <div class="img-container text-center">

            <img src="<?php the_field('thumb_link_3_image') ?>" alt="" class="img-fluid rounded">
            <a class="btn btn-outline-secondary btn-lg btn-block my-4" href="<?php the_field('thumb_link_3_button_link') ?>" role="button"><?php the_field('thumb_link_3_button_text') ?></a>
          </div>
        </div> -->

      </div>
    </div>

  </div>


</section>