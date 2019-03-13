<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if( have_posts() ): the_post(); ?>
      <article <?php post_class( 'article' ); ?>>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
