<?php get_header(); ?>
<div class="container">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="<?php echo get_option('slide_link1'); ?>"><img src="<?php echo get_option('slide_image1'); ?>" alt="slide_image1"/><?php if( get_option('slide_text1') != ""): ?><p class="slide-text"><?php echo get_option('slide_text1'); ?><?php endif; ?></p></a></div>
        <div class="swiper-slide"><a href="<?php echo get_option('slide_link2'); ?>"><img src="<?php echo get_option('slide_image2'); ?>" alt="slide_image2"/><?php if( get_option('slide_text2') != ""): ?><p class="slide-text"><?php echo get_option('slide_text2'); ?><?php endif; ?></p></a></div>
        <div class="swiper-slide"><a href="<?php echo get_option('slide_link3'); ?>"><img src="<?php echo get_option('slide_image3'); ?>" alt="slide_image3"/><?php if( get_option('slide_text3') != ""): ?><p class="slide-text"><?php echo get_option('slide_text3'); ?><?php endif; ?></p></a></div>
        <div class="swiper-slide"><a href="<?php echo get_option('slide_link4'); ?>"><img src="<?php echo get_option('slide_image4'); ?>" alt="slide_image4"/><?php if( get_option('slide_text4') != ""): ?><p class="slide-text"><?php echo get_option('slide_text4'); ?><?php endif; ?></p></a></div>
        <div class="swiper-slide"><a href="<?php echo get_option('slide_link5'); ?>"><img src="<?php echo get_option('slide_image5'); ?>" alt="slide_image5"/><?php if( get_option('slide_text5') != ""): ?><p class="slide-text"><?php echo get_option('slide_text5'); ?><?php endif; ?></p></a></div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-scrollbar"></div>
  </div>
  <div class="notice">
    <?php if( get_option( 'toggle_latest_news' ) ): ?>
    <div id="latest-news">
      <h2>最新ニュース</h2>
      <?php 
      $news_query = new WP_Query(
        array(
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => 5
        )
      );
      if ( $news_query->have_posts() ):
        echo '<ul>';
        while ( $news_query->have_posts() ):
          $news_query->the_post();
          echo '<li><a href="'.get_permalink().'">'. get_the_title().'</a></li>';
        endwhile;
        echo '</ul>';
      else:
        echo '投稿はありません';
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <?php endif; ?>
    <?php if( get_option( 'toggle_notice' ) ): ?>
    <div id ="notice">
      <h2>お知らせ</h2>
      <?php 
      $news_query = new WP_Query(
        array(
          'post_type' => 'post',
          'category_name' => 'notice',
          'posts_per_page' => 5
        )
      );
      if ( $news_query->have_posts() ):
        echo '<ul>';
        while ( $news_query->have_posts() ):
          $news_query->the_post();
          echo '<li><a href="'.get_permalink().'">'. get_the_title().'</a></li>';
        endwhile;
        echo '</ul>';
      else:
        echo '投稿はありません';
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
