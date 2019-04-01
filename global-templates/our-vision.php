<?php

/**
 * Our Vision Section.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- welcome-section -->

<section id="vision-section" class="py-5">
    <div class="container text-center">
        <h2 class="display-4"><?php the_field('our_vision_heading') ?></h2>
        <hr class="heading__underline mb-5">
        <div class="row d-flex justify-content-center">
            <div class="welcome__content">
                <blockquote class="blockquote text-center">
                    <?php the_field("our_vision_body") ?>

                </blockquote>

            </div>
        </div>


    </div>


</section> 