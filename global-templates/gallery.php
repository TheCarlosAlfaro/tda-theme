<?php

/**
 * Gallery setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="home-gallery">
  <div class="gallery">
    <div class="grid">
      <div class="cell">
        <img src="<?php the_field("image_1") ?>" class="responsive-image">
      </div>
      <div class="cell">
        <img src="<?php the_field("image_2") ?>" class="responsive-image">
      </div>
      <div class="cell">
        <img src="<?php the_field("image_3") ?>" class="responsive-image">
      </div>
      <div class="cell">
        <img src="<?php the_field("image_4") ?>" class="responsive-image">
      </div>
      <div class="cell">
        <img src="<?php the_field("image_5") ?>" class="responsive-image">
      </div>
      <div class="cell">
        <img src="<?php the_field("image_6") ?>" class="responsive-image">
      </div>
    </div>
  </div>
</div>