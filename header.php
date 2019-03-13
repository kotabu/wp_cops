<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php get_template_part( 'meta' ); ?>
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
    <button type="button" id="nav-button">
      <i class="fas fa-bars"></i>
    </button>
    <?php if(get_option( 'toggle_contact' )): ?>
    <div  class="contact-information pc">
    <p>住所：<?php echo get_option( 'main_address' ); ?></p>
    <p>電話：<?php echo get_option( 'main_tellphone' ); ?></p>
    </div>
    <?php endif; ?>
  </div>
  <div class="slide-nav">
    <?php if(get_option( 'toggle_contact' )): ?>
    <div class="contact-information mobile">
    <p>住所：<?php echo get_option( 'main_address' ); ?></p>
    <p>電話：<?php echo get_option( 'main_tellphone' ); ?></p>
    </div>
    <?php endif; ?>
  <?php wp_nav_menu(array(
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'container_class' => 'header-nav',
    'container_id' => 'header-nav',
    'fallback_cb' => ''  
  )); ?>
  </div>
</header>
