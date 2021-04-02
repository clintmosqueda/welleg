<?php
  if ( empty( $modifier ) ) { $modifier = ''; }
?>
<div class="header-content <?php echo $modifier ?>">
  <div class="header-nav">
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-item <?php echo (is_front_page()) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url();?>">トップページ</a>
        </li>
        <li class="nav-item <?php echo (is_page(MAKING_PAGE)) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url('making');?>"> 靴づくりのこと</a>
        </li>
        <li class="nav-item <?php echo (is_page(ABOUT_PAGE)) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url('about');?>"> 私たちについて</a>
        </li>
        <li class="nav-item <?php echo (is_page(RECRUIT_PAGE) || is_singular(STAFF_POST_TYPE)) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url('recruit');?>"> 採用情報</a>
        </li>
        <li class="nav-item <?php echo ( is_archive(NEWS_SLUG) ) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url('news');?>">お知らせ </a>
        </li>
        <li class="nav-item <?php echo (is_page(CONTACT_PAGE)) ? 'is-active' : ''; ?>">
          <a class="nav-link js-nav-link" href="<?php echo resolve_url('contact');?>">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    <a class="header-nav-img show-pc" href="<?php echo resolve_url('contact');?>">
      <img alt="" src="<?php echo resolve_asset_url('/images/header-img.svg');?>"/>
    </a>
    
  </div>
  <div class="header-shoplist show-sp">
    <?php import_part('shoplist'); ?>
  </div>
  <div class="header-social show-sp">
    <?php import_part('social-icons'); ?>
  </div>
</div>