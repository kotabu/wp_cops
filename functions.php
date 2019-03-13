<?php

add_theme_support( 'title_tag' );
add_theme_support( 'html5' , array( 'search-form' , 'comment-form' , 'comment-list' , 'gallery' , 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

register_nav_menu( 'header-nav' , 'ヘッダーメニューナビゲーション' );
register_nav_menu( 'footer-nav-left' , 'フッターメニューナビゲーション（左）' );
register_nav_menu( 'footer-nav-center' , 'フッターメニューナビゲーション（中）' );
register_nav_menu( 'footer-nav-right' , 'フッターメニューナビゲーション（右）' );

function cops_enqueue_scripts(){
  wp_enqueue_script(
    'swiper-script', get_template_directory_uri().'/js/swiper.min.js', array( 'jquery' )
  );
  wp_enqueue_script(
    'custom-script', get_template_directory_uri().'/js/custom.js', array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts' , 'cops_enqueue_scripts' );
