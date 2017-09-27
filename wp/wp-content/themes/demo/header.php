<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Always force latest IE rendering engine (even in intranet) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="author" content="Bits Technology" />

    <!-- Don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />

    <!-- Who owns the content of this site? -->
    <meta name="Copyright" content="<?php bloginfo('name'); ?>" />

    <!--  Mobile Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />

    <!-- To avoid any format picker app -->
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">

    <?php wp_head(); ?>

  </head>
  
  <body <?php body_class(); ?>>

    <noscript>
      <div>Javascript must be enabled for the correct page display</div>
    </noscript>

    <header id="header" role="banner">
        header stuff here
    </header>