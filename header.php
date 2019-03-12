<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="view-port" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <div class="site-title">
      <h1><a href="<?php echo home_url(); ?>">
        <?php bloginfo( 'name' ); ?>
      </a></h1>
    </div>
    <div class="contact-information">
      <p>住所：〇〇県〇〇市〇〇町123-123</p>
      <p>電話：0120-123-456</p>
    </div>
    <button type="button" id="nav-button">
      <i class="fas fa-bars"></i>
    </button>
  </div>
  <?php wp_nav_menu(array(
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'container_class' => 'header-nav',
    'container_id' => 'header-nav',
    'fallback_cb' => ''  
  )); ?>
</header>

