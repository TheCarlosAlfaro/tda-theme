<?php

/**
 * Template Name: Servicios
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

<!-- Our Pastors Section -->
<?php get_template_part('global-templates/services'); ?>

<!-- Community Section -->
<?php get_template_part('global-templates/community-bg'); ?>

<!-- Thumb Links Section -->
<?php get_template_part('global-templates/thumb-links'); ?>

<!-- Contact Section -->
<?php get_template_part('global-templates/signup'); ?>


<?php get_footer(); ?>