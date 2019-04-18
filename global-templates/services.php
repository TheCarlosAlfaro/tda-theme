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
          <div class="services--times p--extra-height">
            <h1 class="font-weight-bold display-4"><?php the_field('services_heading') ?></h1>
            <?php the_field('services_times') ?>
          </div>
          <div class="p--extra-height text-center">
            <?php the_field('address') ?>
          </div>

        </div>
        <div class="col-md-6">
          <div class="img-container text-center">
            <p><?php the_field('church_picture_caption') ?></p>
            <img src="<?php the_field('church_picture') ?>" alt="" class="img-fluid rounded pastors-portrait">
          </div>
        </div>
      </div>
    </div>

  </div>


</section>