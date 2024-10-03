<?php
function event_manager_listings_shortcode($atts) {
    ob_start();
    $atts = shortcode_atts(array(
        'taxonomy' => 'event_type',
        'terms'    => '',
    ), $atts, 'event_manager_listings');

    $args = array(
        'post_type' => 'event',
        'tax_query' => array(),
    );

    if (!empty($atts['terms'])) {
        $args['tax_query'][] = array(
            'taxonomy' => $atts['taxonomy'],
            'field'    => 'slug',
            'terms'    => explode(',', $atts['terms']),
        );
    }

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li>' . get_the_title() . ' (' . get_post_meta(get_the_ID(), '_event_date', true) . ')</li>';
        }
        echo '</ul>';
        wp_reset_postdata();
    } else {
        echo __('No events found.', 'event-manager');
    }

    return ob_get_clean();
}
add_shortcode('event_manager_listings', 'event_manager_listings_shortcode');
