<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1 class="display-5">Próximos Eventos</h1>
        <p>No solo eventos. Experiencias.</p>
      </div>
    </div>
    <div class="row">
        
        <?php 
      $today = date('Ymd');
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));
      
      while($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <div class="px-5">
            <div class="event-summary">
              <a href="<?php the_permalink() ?>" class="event-summary__date text-center">
                  <span class="event-summary__month"><?php
                  $eventDate = new DateTime(get_field('event_date'));
                  echo $eventDate->format('M')
                  ?></span>
              <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
              <p><?php if (has_excerpt()) {
                echo get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 18); ?>
                <p><a href="<?php the_permalink() ?>" class="btn btn-secondary understrap-read-more-link">Ver Más...</a></p>
                <?php } ?></p>
              </div>
            </div>
        </div>
            <?php }
      ?>
      
    </div>
    <div class="text-center">
      <a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn-secondary btn-lg" role="button">Ver Todos Los Eventos</a>
    </div>

</div>
</section>