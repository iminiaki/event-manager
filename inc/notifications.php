<?php
function notify_event_update($post_id) {
    if (get_post_type($post_id) !== 'event') {
        return;
    }

    $event_title = get_the_title($post_id);
    $event_link = get_permalink($post_id);
    $recipients = get_option('admin_email');

    $subject = __('Event Updated', 'event-manager');
    $message = sprintf(__('The event "%s" has been updated. You can view it here: %s', 'event-manager'), $event_title, $event_link);
    wp_mail($recipients, $subject, $message);
}
add_action('save_post', 'notify_event_update');
