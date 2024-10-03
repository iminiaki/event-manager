<?php
// Template for displaying event archives
get_header(); ?>

<h1><?php post_type_archive_title(); ?></h1>
<ul>
    <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php echo get_post_meta(get_the_ID(), '_event_date', true); ?></li>
    <?php endwhile; ?>
</ul>

<?php get_footer(); ?>
