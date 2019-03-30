<?php
/**
 * The template for displaying past event.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">Eventos Pasados</h1>
						<div class="taxonomy-description">Mira lo que paso en nuestro mundo.</div>
						<?php
						// the_archive_title( '<h1 class="page-title">', '</h1>' );
						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="py-5">
          <?php /* Start the Loop */ 
            $today = date('Ymd');
            $pastEvents = new WP_Query(array(
              'paged' => get_query_var('paged', 1),
              'post_type' => 'event',
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '<',
                  'value' => $today,
                  'type' => 'numeric'
                )
              )
            ));
          ?>
          
					<?php while ( $pastEvents->have_posts() ) : $pastEvents->the_post(); ?>
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
						
						<?php
						
            
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						// get_template_part( 'loop-templates/content', get_post_format() );
						?>
					<?php endwhile; ?>
					
					<?php else : ?>
					
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
					
					<?php endif; ?>
					
				</div>
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
      <?php echo paginate_links(array(
        'total' => $pastEvents->max_num_pages
      )) ?>

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
