<?php

/**
 * Template Name: Conocenos
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package tda
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<!-- Our Vision Section -->
<?php get_template_part('global-templates/our-vision'); ?>

<!-- Our Values Section -->
<?php get_template_part('global-templates/our-values'); ?>

<!-- Our Pastors Section -->
<?php get_template_part('global-templates/our-pastors-full'); ?>

<!-- Our Pastors Section -->
<?php get_template_part('global-templates/city-bg'); ?>

<!-- Contact Section -->
<?php get_template_part('global-templates/signup'); ?>


<?php get_footer(); ?> 