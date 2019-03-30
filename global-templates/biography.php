<?php

/**
 * Biography setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="home-biography">
  <div class="hidden-sx section py-5">
    <div class="text-center profile-pic">
      <img src="<?php the_field("profile_picture") ?>" class="rounded-circle" alt="...">
    </div>
    <h2 class="text-center display-4 font-weight-bold">
      <?php the_field("profile_name") ?>
    </h2>

    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="one-col-text">
            <p><?php the_field("biography") ?></p>
            <div class="text-center">
              <div>
                <p class="font-weight-bold"><?php the_field("the_vision") ?></p>
              </div>
              <!-- <a href="<?php echo get_theme_mod('home_podcast_button_url', '#'); ?>">
                          <button type="button" class="btn btn-outline-primary"><?php echo get_theme_mod('home_podcast_button_text', 'GET IT NOW'); ?></button>
                        </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>