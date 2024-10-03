<?php
function event_manager_search_query($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_search) {
        $query->set('post_type', 'event');
    }
}
add_action('pre_get_posts', 'event_manager_search_query');
