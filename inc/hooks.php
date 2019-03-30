<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_site_info' ) ) {
  /**
   * Add site info hook to WP hook library.
   */
  function understrap_site_info() {
    do_action( 'understrap_site_info' );
  }
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
  add_action( 'understrap_site_info', 'understrap_add_site_info' );

  /**
   * Add site info content.
   */
  function understrap_add_site_info() {
    $the_theme = wp_get_theme();
    
    $site_info = sprintf(
      '<a href="%1$s" target="_blank">%2$s</a>',
      esc_url( __( 'http://www.aguilascfc.org/', 'understrap' ) ),
      sprintf(
        /* translators:*/
        esc_html__( '© Copyright 2019 Aguilas Centro Familiar Cristiano %s', 'understrap' ), ''
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ), '<a href="' . esc_url( __( 'http://understrap.com', 'understrap' ) ) . '">understrap.com</a>'
      ),
      sprintf( // WPCS: XSS ok.
        /* translators:*/
        esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' )
      )
    );

    echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
  }
}
