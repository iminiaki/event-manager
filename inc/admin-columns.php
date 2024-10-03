<?php
function set_custom_event_manager_columns($columns) {
    $columns['event_date'] = __('Event Date', 'event-manager');
    $columns['event_location'] = __('Event Location', 'event-manager');
    return $columns;
}
add_filter('manage_event_posts_columns', 'set_custom_event_manager_columns');

function custom_event_manager_column($column, $post_id) {
    switch ($column) {
        case 'event_date':
            echo get_post_meta($post_id, '_event_date', true);
            break;
        case 'event_location':
            echo get_post_meta($post_id, '_event_location', true);
            break;
    }
}
add_action('manage_event_posts_custom_column', 'custom_event_manager_column', 10, 2);
