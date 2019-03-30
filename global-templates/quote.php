<?php

/**
 * Quote setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-quote">
  <div class="hidden-sx section parallax mobile--bg-image" style="background: url('<?php the_field("quote_section_background_image") ?>');
         background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
    <div class="container text-center quote-h">
      <blockquote class="blockquote text-center text-light">
        <p class="mb-0"><?php the_field("quote_body") ?></p>
        <footer class="blockquote-footer text-light"><?php the_field("quote_footer") ?></footer>
      </blockquote>
    </div>
  </div>
</div>