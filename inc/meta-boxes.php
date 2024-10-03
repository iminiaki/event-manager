<?php
function add_event_manager_meta_boxes() {
    add_meta_box('event_details', __('Event Details', 'event-manager'), 'render_event_manager_meta_box', 'event', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_event_manager_meta_boxes');

function render_event_manager_meta_box($post) {
    $event_date = get_post_meta($post->ID, '_event_date', true);
    echo '<label for="event_date">' . __('Event Date', 'event-manager') . '</label>';
    echo '<input type="date" id="event_date" name="event_date" value="' . esc_attr($event_date) . '" class="widefat" />';

    $event_location = get_post_meta($post->ID, '_event_location', true);
    echo '<label for="event_location">' . __('Event Location', 'event-manager') . '</label>';
    echo '<input type="text" id="event_location" name="event_location" value="' . esc_attr($event_location) . '" class="widefat" />';
}

function save_event_manager_meta_boxes($post_id) {
    if (array_key_exists('event_date', $_POST)) {
        update_post_meta($post_id, '_event_date', sanitize_text_field($_POST['event_date']));
    }
    if (array_key_exists('event_location', $_POST)) {
        update_post_meta($post_id, '_event_location', sanitize_text_field($_POST['event_location']));
    }
}
add_action('save_post', 'save_event_manager_meta_boxes');
