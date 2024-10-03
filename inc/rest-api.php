<?php
function register_event_manager_routes() {
    register_rest_route('event-manager/v1', '/events', array(
        'methods' => 'GET',
        'callback' => 'get_events',
    ));
}
add_action('rest_api_init', 'register_event_manager_routes');

function get_events(WP_REST_Request $request) {
    $args = array('post_type' => 'event', 'numberposts' => -1);
    $events = get_posts($args);

    if (empty($events)) {
        return new WP_Error('no_events', __('No events found', 'event-manager'), array('status' => 404));
    }

    return array_map(function($event) {
        return array(
            'id' => $event->ID,
            'title' => get_the_title($event),
            'date' => get_post_meta($event->ID, '_event_date', true),
            'location' => get_post_meta($event->ID, '_event_location', true),
        );
    }, $events);
}
