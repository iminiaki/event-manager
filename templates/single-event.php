<?php
// Template for displaying a single event
get_header(); ?>

<div class="event-single">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <p><?php echo get_post_meta(get_the_ID(), '_event_date', true); ?></p>
    <p><?php echo get_post_meta(get_the_ID(), '_event_location', true); ?></p>
</div>

<?php get_footer(); ?>
