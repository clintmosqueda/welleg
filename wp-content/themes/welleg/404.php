<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @see https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>

<div class="page-404">
  <h1 class="page-404-heading">404 <span>Page not Found</span></h1>
  <a class="page-404-link" href="<?php echo resolve_url();?>">トップページへ戻る </a>
</div>

<?php
get_footer();
