<?php

/**
 * Live setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-live">
  <div class="hidden-sx section parallax mobile--bg-image" style="background: url('<?php the_field("live_background_image") ?>');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
    <div class="container text-light">
      <div class="col-md-6 px-0 text-light live-h">
        <h1 class="section-header font-italic"><?php the_field("live_title") ?></h1>
        <p class="lead my-3"><?php the_field("live_body_text") ?></p>
        <p class="lead"><a href="<?php the_field("live_button_url") ?>"
            class="text-white font-weight-bold"><?php the_field("live_footer_text") ?></a></p>
        <a href="<?php the_field("live_button_url") ?>">
          <button type="button" class="btn btn-primary">
            <?php the_field("live_button_text") ?></button>
        </a>
      </div>
    </div>
  </div>
</div>