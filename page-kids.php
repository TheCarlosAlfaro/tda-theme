<?php

/**
 * Template Name: Kids
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<section id="kids-section" class="py-5">
  <div class="container text-center">
    <h1 class="font-weight-bold display-4"><?php the_field("hero_heading") ?>TDA Kids</h1>
    <p class="lead pb-3"><?php the_field("hero_subheading") ?>Love Jesus - Have Fun - Be A Friend - Do Your Best</p>

    <hr class="heading__underline mb-5">
  </div>

  <div class="container">
    <!-- <h2 class="display-4 text-center"><?php the_field('_heading'); ?></h2> -->
    <!-- <hr class="heading__underline mb-5"> -->

    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <p><?php the_field('kids_description_body'); ?></p>
          <p class="text-uppercase font-italic"><?php the_field('kids_check_in_times'); ?></p>
          <hr class="heading__underline my-5">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="text-center">
            <img src="<?php the_field('kids_1_icon'); ?>" alt="" class="img-fluid rounded">
            <h2 class=""><?php the_field('kids_1_heading'); ?></h2>
            <p><?php the_field('kids_1_body'); ?></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-center">
            <img src="<?php the_field('kids_2_icon'); ?>" alt="" class="img-fluid rounded">
            <h2 class=""><?php the_field('kids_2_heading'); ?></h2>
            <p><?php the_field('kids_2_body'); ?></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-center">
            <img src="<?php the_field('kids_3_icon'); ?>" alt="" class="img-fluid rounded">
            <h2 class=""><?php the_field('kids_3_heading'); ?></h2>
            <p><?php the_field('kids_3_body'); ?></p>
          </div>
        </div>

      </div>
    </div>

  </div>


</section>
<section id="services-section" class="py-5">
  <div class="container text-center">
    <h2 class="display-4"><?php the_field('kids_safety_heading'); ?></h2>
    <hr class="heading__underline mb-5">
    <p class="mb-5"><?php the_field('kids_safety_body'); ?></p>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="img-container text-center">
            <img src="<?php the_field('kids_img_1') ?>" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-4">
          <div class="img-container text-center">
            <img src="<?php the_field('kids_img_2') ?>" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-4">
          <div class="img-container text-center">
            <img src="<?php the_field('kids_img_3') ?>" alt="" class="img-fluid rounded">
          </div>
        </div>

      

      </div>
    </div>

  </div>


</section>

<!-- Contact Section -->
<?php get_template_part('global-templates/signup'); ?>


<?php get_footer(); ?>