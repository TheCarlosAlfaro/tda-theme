<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>

		

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large', ['class' => 'rounded mx-auto d-block', 'title' => 'Feature image'] ); ?>

	<div class="entry-content px-5">

		<?php the_content(); ?>

		<?php 

/*
*  Query posts for a relationship value.
*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
*/

$resources = get_posts(array(
	'post_type' => 'resource',
	'meta_query' => array(
		array(
			'key' => 'related_categories', // name of custom field
			'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
			'compare' => 'LIKE'
		)
	)
));

?>
<?php if( $resources ): ?>
	<div>
	<?php foreach( $resources as $resource ): ?>
		<?php 

		$photo = get_field('photo', $resource->ID);

		?>
		<div class="container category-cards">
			<a href="<?php echo get_permalink( $resource->ID ); ?>">
					<div class="row list resources">
						<div><img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" width="200" /></div>
						<p class="pl-2 pt-2"><?php echo get_the_title( $resource->ID ); ?></p>
					</div>
				</a>
		</div>
		
	<?php endforeach; ?>
	</div>
<?php endif; ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

