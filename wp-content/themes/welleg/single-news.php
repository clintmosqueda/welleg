<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>

<div id="<?php echo get_the_id(); ?>" class="hidden single-post-id"></div>

<?php
get_footer();