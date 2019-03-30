<?php

/**
 * Jumbotron setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-signup">
  <div class="hidden-sx section parallax py-5 mobile--bg-image" style="background: url('<?php the_field("sign_up_background_image") ?>');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
    <!-- <div style="background-color: #EFEFEF;" class="py-5"> -->
    <h3 class="text-center section-header">
      <?php the_field("sign_up_title"); ?>
    </h3>
    <p class="text-center section-sub-header">
      <?php the_field("sign_up_sub_title"); ?>
    </p>
    <div class="container text-center">
      <div class="top-pad">
        <!-- Sign up form -->
        <div id="header__contact-form">
          <?php echo do_shortcode(the_field("sign_up_contact_form_shortcode")); ?>

        </div>
      </div>
    </div>
  </div>
</div>