<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if( is_category() || is_tag() ): ?>
      <h1><?php single_cat_title(); ?></h1>
    <?php elseif( is_year() ): ?>
      <h1><?php the_time( 'Y年' ); ?>の記事</h1>
    <?php elseif( is_month() ): ?>
      <h1><?php the_time( 'Y年m月' ); ?>の記事</h1>
    <?php endif; ?>
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <ul <?php post_class( 'article-list' ); ?>>
        <li>
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
          <span class="article-date">
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
            </time>
          </span>
        </li>
      </ul>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>
