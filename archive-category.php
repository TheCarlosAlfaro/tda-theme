<?php
/**
 * The template for displaying archive pages.
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

      <div class="col-md-12 content-area" id="primary">
        <main class="site-main" id="main">

          <header class="page-header">
            <h1 class="page-title">Todas Las Categorías</h1>
          </header><!-- .page-header -->

          <?php
                $counter = 0;
                $startRow = true;
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                    if ($startRow) {
                        echo '<div class="row">';
                        $startRow = false;
                    }
                ?>
            <div class="col-md-4 py-3">
              <div class="text-overlay__container">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  
                    <a href="<?php the_permalink(); ?>" class="link-article">
                        <?php the_post_thumbnail('medium_large', array('class' => 'img-res shadow text-overlay__image','alt' => get_the_title())); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>" class="link-article">
                      <div class="text-overlay__overlay overlayLeft">
                        <div class="text-overlay__text text-center"><?php the_title(); ?></div>
                      </div>
                    </a>
                  </article>
              </div>
            </div>

            <?php $counter += 1; ?>

            <?php
                if ($counter == 3 ) {
                    echo '</div>';
                    $startRow = true;
                    $counter = 0;
                }
            ?>
            <?php endwhile; ?>
            
          <?php else : ?>

            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

          <?php endif; ?>

        </main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

    </div> <!-- content-area -->
	</div> <!-- .row -->
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
