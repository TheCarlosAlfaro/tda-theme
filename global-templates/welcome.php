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
    <div class="container text-center">
        <h2 class="display-4"><?php the_field('welcome_heading'); ?></h2>
        <hr class="heading__underline mb-5">
        <div class="row d-flex justify-content-center">
            <div class="welcome__content">
                <?php the_field('welcome_body'); ?>

            </div>
        </div>


    </div>


</section> 