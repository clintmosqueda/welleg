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
  <title>お知らせ | 株式会社Welleg(ウェレッグ) | 1925年創業。香川県のレディースシューズメーカー</title>
  <meta name="description" content="目指すのは、最高の1足。私たちWellegは「キレイなあしを創る」を理念に、履きやすく、見た目もよく、種類も豊富で、それでいてお求めやすい靴づくりをモットーにしています。">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" id="js-viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content='<?php echo get_eyecatch_data(get_the_id(), 'full', resolve_asset_url('/images/ogp.jpg')); ?>' />

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

    let navigatorUserAgent = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    if(navigator.userAgent.includes('Mobile')) {
      console.log('using mobile device');
      if(screen.availWidth > screen.availHeight ) document.querySelector("meta[name='viewport']").setAttribute('content', 'width=1280');

      window.addEventListener("orientationchange", function() {
        let orientation = window.orientation;
        console.log(orientation);
        if(orientation == 0) {
          document.querySelector("meta[name='viewport']").setAttribute('content', 'width=device-width,initial-scale=1.0,user-scalable=no' );
        } 
        else {
          document.querySelector("meta[name='viewport']").setAttribute('content', 'width=1280');
        }

        const htmlEl = document.querySelector('html');
        if (window.matchMedia("(orientation: landscape)").matches && htmlEl.classList.contains('is-ios')) {
          document.querySelector("meta[name='viewport']").setAttribute('content', 'width=device-width,initial-scale=1.0,user-scalable=no' );
        }

      });
      
    } else {
      console.log('not using mobile device');
    }
  </script>
  <script>
    (function(d) {
      var config = {
        kitId: 'srj1bjw',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <script type="text/javascript">
    let siteUrl = '<?= get_site_url() ?>';
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139236186-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-139236186-1');
  </script>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<input id="base-url" type="hidden" value="<?php echo resolve_url(); ?>" />
<?php if(is_front_page()) : ?>
  <?php import_part('preload');?>
<?php endif?>
<div class="wrap js-wrap <?php echo is_front_page() ? 'is-loading' : ''; ?>">
  <div class="header-main-wrap js-header-main-wrap js-hide-scroll">
  <header class="header js-header">
    <div class="header-logo">
      <a href="<?php echo resolve_url();?>" class="header-logo-link">
        <img class="header-logo-img" alt="" src="<?php echo resolve_asset_url('/images/logo.svg');?>"/>
      </a>
      <span class="header-logo-text">キレイなあしを創る。</span>
    </div>
    <?php
      import_part('header-content', array(
        'modifier' => 'show-pc',
      ));
    ?>
  </header>
  <div class="header-menu-sp show-sp">
    <div class="header-menu-btn js-menu">MENU</div>
    <?php
      import_part('header-content', array(
        'modifier' => 'show-sp js-header-content',
      ));
    ?>
  </div>
  </div>
<main>
</main>

<?php
get_footer();