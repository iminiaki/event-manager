<?php
function event_manager_load_textdomain() {
    load_plugin_textdomain('event-manager', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'event_manager_load_textdomain');
