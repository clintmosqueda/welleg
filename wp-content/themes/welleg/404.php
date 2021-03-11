<?php get_header(); ?>
<div class="page-404">
  <h1 class="page-404-heading">Page not Found</h1>
  <p class="page-404-par">ページが見つかりませんでした。<br>トップページまで一緒に歩きませんか？</p>
  <a class="page-404-link" href="<?php echo resolve_url();?>">トップページ</a>
  <img class="page-404-image" src="<?php echo resolve_asset_url('/images/404.png');?>" alt="">
</div>
<?php
get_footer();