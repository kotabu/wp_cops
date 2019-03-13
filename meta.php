<?php if( is_tag() || is_date() || is_search() || is_404() ): ?>
  <meta name="robots" content="noindex" />
<?php endif; ?>
<!-- singlemeta -->
<?php if( is_single() && !is_home() || is_page() && !is_front_page() ): ?>
<?php setup_postdata($post); ?>
<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>
<?php if( has_tag() ): ?>
<?php $tags = get_the_tags();
$kwds = array();
foreach( $tags as $tag ) {
  $kwds[] = $tag->name;
}?>
  <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>"/>
<?php endif; ?>
<?php else: ?>
<!-- othermeta -->
<meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
<?php $allcats = get_categories();
$kwds = array();
foreach( $allcats as $allcat ) {
  $kwds[] = $allcat->name;
}?>
<meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>"/>
<?php endif; ?>

