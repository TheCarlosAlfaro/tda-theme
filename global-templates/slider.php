<?php
/**
 * Carousel/Slider setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!-- Carousel/Slider Section -->
<section class="py-5">

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h1 class="display-5">RESOURCES FOR BUILDING A HEALTHY CHURCH</h1>
				<p>Here are just a few of over 1700 resources available on the Resource Network</p>
			</div>
		</div>
	</div>
	<?php get_template_part( 'global-templates/hero' ); ?>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a class="btn btn-outline-secondary btn-lg" href="#" role="button">PRICING</a>
				<a class="btn btn-outline-primary btn-lg" href="#" role="button">SIGN UP</a>
			</div>
		</div>
	</div>
</section>
