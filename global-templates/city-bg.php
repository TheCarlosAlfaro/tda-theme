<?php

/**
 * City Background setup.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="kids">
    <div class="hero--bg-image" style="background-image: 
    linear-gradient(rgba(37, 51, 102, 0.6), rgba(37, 51, 102, 0.6)), url('<?php the_field('city_bg'); ?>');">
        <div class="container text-center quote-h text-light">
            <h2 class="display-4"><?php the_field('city_text'); ?></h2>
            <hr class="heading__underline mb-5">
            <!-- <div class="row d-flex justify-content-center">
                <div class="">
                    <h3 class="font-weight-bold"><?php the_field('kids_bold_info') ?></h3>
                    <p><?php the_field('kids_small_copy'); ?></p>
                    <a href="<?php the_field('kids_button_url'); ?>" class="btn btn-outline-light btn-block-xs-only mb-3">
                        <?php the_field('kids_button_text'); ?>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div> 