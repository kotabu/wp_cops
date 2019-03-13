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

function main_theme_customize_register($wp_customize) {
  $wp_customize->add_section( 'main_setting', array(
    'title' => '全般設定',
    'priority' => '99',
  ) );

  $wp_customize->add_setting( 'main_address' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'main_tellphone' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'toggle_contact' , array(
    'type' => 'option',
  ) );
  
  $wp_customize->add_control ( 'main_address' , array(
    'settings' => 'main_address',
    'label' => '表示する住所',
    'section' => 'main_setting',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'main_tellphone' , array(
    'settings' => 'main_tellphone',
    'label' => '表示する電話番号',
    'section' => 'main_setting',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'toggle_contact' , array(
    'settings' => 'toggle_contact',
    'label' => '連絡先情報を表示する',
    'section' => 'main_setting',
    'type' => 'checkbox',
  ) );
}
add_action( 'customize_register' , 'main_theme_customize_register' );

function front_page_theme_customize_register($wp_customize) {
  $wp_customize->add_section( 'front_page_custom', array(
    'title' => 'フロントページカスタム',
    'priority' => '100',
  ) );

  $wp_customize->add_setting( 'slide_image1' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_link1' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_text1' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_image2' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_link2' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_text2' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_image3' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_link3' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_text3' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_image4' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_link4' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_text4' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_image5' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_link5' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'slide_text5' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'toggle_latest_news' , array(
    'type' => 'option',
  ) );
  $wp_customize->add_setting( 'toggle_notice' , array(
    'type' => 'option',
  ) );

if( class_exists('WP_Customize_Image_Control') ):
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'slide_image1', array(
    'settings' => 'slide_image1',
    'label' => 'スライド画像①',
    'section' => 'front_page_custom',
  ) ));
  $wp_customize->add_control ( 'slide_link1' , array(
    'settings' => 'slide_link1',
    'label' => 'スライドリンク①',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'slide_text1' , array(
    'settings' => 'slide_text1',
    'label' => 'スライドテキスト①',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'slide_image2', array(
    'settings' => 'slide_image2',
    'label' => 'スライド画像②',
    'section' => 'front_page_custom',
  ) ));
  $wp_customize->add_control ( 'slide_link2' , array(
    'settings' => 'slide_link2',
    'label' => 'スライドリンク②',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'slide_text2' , array(
    'settings' => 'slide_text2',
    'label' => 'スライドテキスト②',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'slide_image3', array(
    'settings' => 'slide_image3',
    'label' => 'スライド画像③',
    'section' => 'front_page_custom',
  ) ));
  $wp_customize->add_control ( 'slide_link3' , array(
    'settings' => 'slide_link3',
    'label' => 'スライドリンク③',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'slide_text3' , array(
    'settings' => 'slide_text3',
    'label' => 'スライドテキスト③',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'slide_image4', array(
    'settings' => 'slide_image4',
    'label' => 'スライド画像④',
    'section' => 'front_page_custom',
  ) ));
  $wp_customize->add_control ( 'slide_link4' , array(
    'settings' => 'slide_link4',
    'label' => 'スライドリンク④',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'slide_text4' , array(
    'settings' => 'slide_text4',
    'label' => 'スライドテキスト④',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'slide_image5', array(
    'settings' => 'slide_image5',
    'label' => 'スライド画像⑤',
    'section' => 'front_page_custom',
  ) ));
  $wp_customize->add_control ( 'slide_link5' , array(
    'settings' => 'slide_link5',
    'label' => 'スライドリンク⑤',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
  $wp_customize->add_control ( 'slide_text5' , array(
    'settings' => 'slide_text5',
    'label' => 'スライドテキスト⑤',
    'section' => 'front_page_custom',
    'type' => 'text',
  ) );
endif;
  $wp_customize->add_control ( 'toggle_latest_news' , array(
    'settings' => 'toggle_latest_news',
    'label' => '最新ニュースを表示する',
    'section' => 'front_page_custom',
    'type' => 'checkbox',
  ) );
  $wp_customize->add_control ( 'toggle_notice' , array(
    'settings' => 'toggle_notice',
    'label' => 'お知らせを表示する',
    'section' => 'front_page_custom',
    'type' => 'checkbox',
  ) );
}
add_action( 'customize_register' , 'front_page_theme_customize_register' );
