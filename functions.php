<?php

add_theme_support( 'title_tag' );
add_theme_support( 'html5' , array( 'search-form' , 'comment-form' , 'comment-list' , 'gallery' , 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

register_nav_menu( 'header-nav' , 'ヘッダーメニューナビゲーション' );
register_nav_menu( 'footer-nav-left' , 'フッターメニューナビゲーション（左）' );
register_nav_menu( 'footer-nav-center' , 'フッターメニューナビゲーション（中）' );
register_nav_menu( 'footer-nav-right' , 'フッターメニューナビゲーション（右）' );
