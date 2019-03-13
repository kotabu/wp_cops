<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if ( have_posts() ): the_post(); ?>
      <article <?php post_class( 'article' ); ?>>
      <div class="article-info">
        <div class="article-date">
          <time datetime="<?php get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
          </time>
        </div>
        <?php if ( has_category() ): ?>
          <div class="article-category">
            <?php echo get_the_category_list( ' ' ); ?>
          </div>
        <?php endif; ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      </article>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
