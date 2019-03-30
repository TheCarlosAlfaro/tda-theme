<?php

/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<!-- Hero Section/Jumbotron -->
<?php get_template_part('global-templates/jumbotron'); ?>

<!-- Welcome Section -->
<?php get_template_part('global-templates/welcome'); ?>

<!-- Our Pastors Section -->
<?php get_template_part('global-templates/our-pastors'); ?>

<!-- Our Vision Section -->
<?php get_template_part('global-templates/our-vision'); ?>


<?php get_footer(); ?> 