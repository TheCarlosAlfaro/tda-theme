<?php

/**
 * Book setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="home-book">
  <div class="hidden-sx section split-color-back py-5">
    <h3 class="text-center section-header">
      <?php the_field("book_section_title") ?>
    </h3>

    <div class="container">
      <div class="row pt-4">
        <div class="col-md">
          <img class="book-img" src="<?php the_field("book_image") ?>" alt="">
        </div>
        <div class="col-md">
          <p><?php the_field("book_body_text") ?></p>
          <div class="text-center">
            <div>
              <p class="font-weight-bold"><?php the_field("book_footer_text") ?></p>
            </div>
            <a href="<?php the_field("book_button_url") ?>" target="_blank">
              <button type="button" class="btn btn-outline-primary"><?php the_field("book_button_text") ?></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>