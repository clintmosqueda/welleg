<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="main">
  <div class="side-copyright">
    <p class="side-copyright-text">&copy; Welleg inc. 2021</p>
  </div>
  <section class="banner">
    <div class="banner-content">
      <img class="banner-img" src="<?php echo resolve_asset_url('/images/banner-img.jpg');?>" alt=""/>
      <p class="banner-text">てくてく、いい靴と、いい人生。</p>
      <div class="banner-scroll">
        <img class="banner-scroll-img" src="<?php echo resolve_asset_url('/images/banner-scroll.png');?>" alt=""/>
      </div>
    </div>
  </section>
  <?php import_part('vision'); ?>
  <section class="about">
    <div class="about-wrapper wrapper">
      <div class="about-content">
        <div class="about-image-content">
          <div class="about-image-item">
            <img class="about-image-img" src="<?php echo resolve_asset_url('/images/about-img1.png');?>" alt=""/>
          </div>
          <div class="about-image-item">
            <img class="about-image-img" src="<?php echo resolve_asset_url('/images/about-img2.png');?>" alt=""/>
          </div>
          <div class="about-image-item">
            <img class="about-image-img" src="<?php echo resolve_asset_url('/images/about-img3.png');?>" alt=""/>
          </div>
        </div>
        <div class="about-text-content">
          <img class="about-footprint" src="<?php echo resolve_asset_url('/images/footprint-light.svg');?>" alt=""/>
          <h2 class="about-heading">
            1925年から、靴のことばかりを<br/>考えてきました。
          </h2>
          <div class="about-btn">
            <?php import_part('button', array(
                'text' => '私たちについて',
                'back_circle_color' => '#e5e5e5',
                'front_circle_color' => '#fff',
                'link' => '/',
                'arrow_color' => '#fff',
              )); 
            ?>
          </div>
        </div>
      </div>
    </div>
</section>
</main>
<?php
get_footer();

