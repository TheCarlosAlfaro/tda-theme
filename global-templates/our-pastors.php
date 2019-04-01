<?php

/**
 * Our Pastors setup.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="pastors-quote">
    <div class="hero--bg-image" style="background-image: 
    linear-gradient(rgba(37, 51, 102, 0.6), rgba(37, 51, 102, 0.6)), url('<?php the_field('our_pastors_bg_img'); ?>');">
        <div class="container text-center quote-h text-light">
            <h2 class="display-4"><?php the_field('our_pastors_heading'); ?></h2>
            <hr class="heading__underline mb-5">
            <div class="row d-flex justify-content-center">
                <div class="welcome__content">
                    <?php the_field('our_pastors_body'); ?>


                </div>
            </div>
        </div>
    </div>
</div> 