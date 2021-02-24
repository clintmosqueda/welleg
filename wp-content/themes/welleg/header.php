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

<header class="header">
  <div class="header-logo">
    <a href="" class="header-logo-link">
      <img class="header-logo-img" alt="" src="<?php echo resolve_asset_url('/images/logo.svg');?>"/>
    </a>
    <span class="header-logo-text">キレイなあしを創る。</span>
  </div>
  <div class="header-content">
  </div>
  <div class="header-nav">
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-item">
          <a class="nav-link" href="">トップページ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""> 靴づくりのこと</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""> 私たちについて</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""> 採用情報</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">お知らせ </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">お問い合わせ</a>
        </li>
      </ul>
    </nav> 
    <img class="header-nav-img show-pc" alt="" src="<?php echo resolve_asset_url('/images/nav-img.png');?>"/>
  </div>
  <div class="header-shoplist show-sp">
    <h4 class="header-shoplist-title">ショップリスト</h4>
    <ul class="header-shoplist-list">
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href="">wellegオンラインストア</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href=""> 楽天市場店</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href="">paypayモール店</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href="">Amazon店</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href=""> ZOZOTOWN店</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href="">auPAYマーケット店</a>
      </li>
      <li class="header-shoplist-item">
        <a class="header-shoplist-link" href="">SHOPLIST店</a>
      </li>
    </ul>
  </div>
  <div class="header-social show-sp">
    <ul class="header-social-list">
      <li class="header-social-item">
        <a href=""><span class="icon-twitter"></span></a>
      </li>
      <li class="header-social-item">
        <a href=""><span class="icon-facebook"></span></a>
      </li>
      <li class="header-social-item">
        <a href=""><span class="icon-instagram"></span></a>
      </li>
      <li class="header-social-item">
        <a href=""><span class="icon-line"></span></a>
      </li>
    </ul>
  </div>
</header>

