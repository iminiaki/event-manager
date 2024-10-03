<?php
function event_manager_post_type() {
    $labels = array(
        'name'               => _x('Events', 'post type general name', 'event-manager'),
        'singular_name'      => _x('Event', 'post type singular name', 'event-manager'),
        'menu_name'          => _x('Events', 'admin menu', 'event-manager'),
        'add_new'            => _x('Add New', 'event', 'event-manager'),
        'add_new_item'       => __('Add New Event', 'event-manager'),
        'edit_item'          => __('Edit Event', 'event-manager'),
        'new_item'           => __('New Event', 'event-manager'),
        'view_item'          => __('View Event', 'event-manager'),
        'search_items'       => __('Search Events', 'event-manager'),
        'not_found'          => __('No events found', 'event-manager'),
        'not_found_in_trash' => __('No events found in Trash', 'event-manager'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'has_archive'        => true,
        'capability_type'    => 'post',
        'map_meta_cap'      => true,
    );
    register_post_type('event', $args);

    $taxonomy_labels = array(
        'name'              => _x('Event Types', 'taxonomy general name', 'event-manager'),
        'singular_name'     => _x('Event Type', 'taxonomy singular name', 'event-manager'),
        'search_items'      => __('Search Event Types', 'event-manager'),
        'all_items'         => __('All Event Types', 'event-manager'),
        'edit_item'         => __('Edit Event Type', 'event-manager'),
        'update_item'       => __('Update Event Type', 'event-manager'),
        'add_new_item'      => __('Add New Event Type', 'event-manager'),
        'new_item_name'     => __('New Event Type Name', 'event-manager'),
        'menu_name'         => __('Event Types', 'event-manager'),
    );
    register_taxonomy('event_type', 'event', array(
        'labels' => $taxonomy_labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    ));
}
add_action('init', 'event_manager_post_type');
