<?php 
function event_manager_activate() {
    flush_rewrite_rules();
}
function event_manager_deactivate() {
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'event_manager_activate');
register_deactivation_hook(__FILE__, 'event_manager_deactivate');