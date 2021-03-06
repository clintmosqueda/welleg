<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|'); ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" id="js-viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="<?php echo resolve_asset_url('/images/favicon/favicon.ico'); ?>">
  <link rel="stylesheet" href="<?php echo resolve_asset_url('/css/app.css'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Poppins&display=swap" rel="stylesheet">

  <script>
  let isIOS = /iPad/.test(navigator.platform) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
  let checkVersion = /Version\/13/;
  let isIpad = navigator.userAgent.match(/iPad/i) !== null;

  console.log({isIOS})

    if(isIpad) {
        document.querySelector("meta[name='viewport']").setAttribute('content', 'width=1280');
    } else {
      if (window.screen.width < 375) {
        document.getElementById('js-viewport').setAttribute('content', 'width=375, initial-scale=' + 320 / 375 + ', user-scalable=no');
      }
    }

    if(isIOS && checkVersion.test(navigator.userAgent) ) {
      document.querySelector('html').classList.add('is-ipad-13');
      document.querySelector("meta[name='viewport']").setAttribute('content', 'width=1440');
    } else {
      if (window.screen.width < 375) {
        document.getElementById('js-viewport').setAttribute('content', 'width=375, initial-scale=' + 320 / 375 + ', user-scalable=no');
      }
    }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<input id="base-url" type="hidden" value="<?php echo resolve_url(); ?>" />

<div class="wrap js-wrap">
  <header class="header js-header">
    <div class="header-logo">
      <a href="<?php echo resolve_url();?>" class="header-logo-link">
        <img class="header-logo-img" alt="" src="<?php echo resolve_asset_url('/images/logo.svg');?>"/>
      </a>
      <span class="header-logo-text">キレイなあしを創る。</span>
    </div>
    <div class="header-menu-btn js-menu show-sp">MENU</div>
    <div class="header-content">
      <div class="header-nav">
        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url();?>">トップページ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url('making');?>"> 靴づくりのこと</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url('about');?>"> 私たちについて</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url('recruit');?>"> 採用情報</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url('news');?>">お知らせ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-nav-link" href="<?php echo resolve_url('contact');?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <img class="header-nav-img show-pc" alt="" src="<?php echo resolve_asset_url('/images/nav-img.png');?>"/>
      </div>
      <div class="header-shoplist show-sp">
        <?php import_part('shoplist'); ?>
      </div>
      <div class="header-social show-sp">
        <?php import_part('social-icons'); ?>
      </div>
    </div>
  </header>

