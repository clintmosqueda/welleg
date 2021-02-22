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
<nav class="nav"></nav> 
</header>

