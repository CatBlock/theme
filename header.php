<!DOCTYPE html>
<html lang="en" class="page-home">

<head>
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link rel="icon" href="img/favicon.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="It's AdBlock, but instead of removing ads, we will replace them with cats!">
  <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/mdcgnhlfpnbeieiiccmebgkfdebafodo">
  <!-- OpenGraph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="CatBlock">
  <meta property="og:description" content="It's AdBlock, but instead of removing ads, we will replace them with cats!">
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="http://blog.catblock.tk/">
  <meta property="og:image" content="http://blog.catblock.tk/wp-content/uploads/2015/03/logo.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="2050">
  <meta property="og:image:height" content="2050">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:creator" content="@auth0">
  <meta name="twitter:title" content="CatBlock">
  <meta name="twitter:description" content="It's AdBlock, but instead of removing ads, we will replace them with cats!">
  <meta name="twitter:image" content="http://blog.catblock.tk/wp-content/uploads/2015/03/logo.png">
  <!-- CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
  <link href="//fast.fonts.net/cssapi/c09dcecc-c8ed-4810-86df-2634f138c622.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/index.js"></script>
</head>

<body>
  <!-- Google Tag Manager must go at top of body -->
  <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-K3K9K9" height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
  </noscript>
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K3K9K9');
  </script>
  <!-- End Google Tag Manager -->
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><!-- .navbar-toggle -->
        <a href="/" class="navbar-brand">
          <span class="symbol">
            <img src="//blog.catblock.tk/wp-content/uploads/2015/03/logo-300x300.png">
          </span>
          <span class="logotype">CatBlock</span>
        </a><!-- .navbar-brand -->
      </div><!-- .navbar-header -->
      <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <?php wp_nav_menu(array("container"=>false, "menu_class"=>"nav navbar-nav navbar-right", )); ?>
        </ul>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->