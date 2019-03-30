<?php

add_action('rest_api_init', 'understrapRegisterSearch');

function understrapRegisterSearch() {
  register_rest_route('understrap/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'understrapSearchResults'
  ));
}

function understrapSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page', 'resource', 'category'),
    's' => sanitize_text_field($data['term']) 
  ));

  $results = array(
    'generalInfo' => array(),
    'resources' => array(),
    'categories' => array()
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }

    if (get_post_type() == 'resource') {
      array_push($results['resources'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }

    if (get_post_type() == 'category') {
      array_push($results['categories'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }

    
  }

  $resourceRelationshipQuery = new WP_Query(array(
    'post_type' => 'resource',
    'meta_query' => array(
      array(
        'key' => 'related_resources',
        'compare' => 'LIKE',
        'value' => '"97"'
      )
    )
  ));

  while($resourceRelationshipQuery->have_posts()) {
    $resourceRelationshipQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }

    if (get_post_type() == 'resource') {
      array_push($results['resources'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }

    if (get_post_type() == 'category') {
      array_push($results['categories'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'image' => get_the_post_thumbnail_url(0, 'small')
      ));
    }
  }
  
  return $results;
}
