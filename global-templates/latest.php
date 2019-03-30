<?php

/**
 * Latest setup.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-latest">
  <div class="hidden-sx py-5">
    <h3 class="text-center section-header"><?php the_field("mas_recientes_title") ?></h3>
    <p class="text-center"><?php the_field("mas_recientes_sub_title") ?></p>
    <div class="container">
      <div class="row">
        <?php
                $remaPosts = new WP_Query(array(
                  'post_type' => 'post',
                  'cat' => '1',
                  'posts_per_page' => 3
                ));
                while ($remaPosts->have_posts()) {
                  $remaPosts->the_post(); ?>
        <div class="col-md-6 col-xl-4">
          <div class="card mb-4 box-shadow">
            <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"
                alt="Card image cap"></a>
            <div class="card-body">
              <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="card-text"><a
                  href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 8) ?></a></p>
              <div class="d-flex justify-content-between align-items-center">

                <a href="<?php the_permalink(); ?>">
                  <small class="text-muted"><?php the_time('M-d-Y') ?></small>
                </a>
                <div class="btn-group">
                  <a href="<?php the_permalink(); ?>">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Leer Mas</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
              }
              wp_reset_postdata();
              ?>
      </div>
      <div class="row">
        <div class="col text-center">
          <a href="<?php the_field("mas_recientes_button_url") ?>" target="_blank">
            <button type="button"
              class="btn btn-outline-primary"><?php the_field("mas_recientes_button_text") ?></button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>