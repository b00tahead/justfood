<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Just_Food
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="blog-category-title">
    <?php if ( 'post' === get_post_type() ) :?>
      <p class="post-category"><?php the_category(', '); ?></p>
    <?php elseif ( 'event' === get_post_type() ) :?>
    <p class="post-category"><?php justfood_get_event_date(); ?></p>
    <?php endif ?>

  
    <header class="entry-header">
      <?php
      if ( is_singular() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
      else :
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif;
      ?>
    </header><!-- .entry-header -->
  </div><!-- .blog-category-title -->

  <div class="blog-featured-image">
	  <?php justfood_post_thumbnail(); ?>
  </div><!-- .blog-featured-image -->

  <?php if ( 'post' === get_post_type() ) :?>
    <div class="blog-author-date">
      <div class="entry-meta">
        <div class="author-photo">
          <?php justfood_get_author_image(); ?>
        </div>
        <div class="post-info">
          <p class="post-author"><?php justfood_posted_by(); ?></p>
          <p class="post-date"><?php justfood_posted_on(); ?></p>
        </div>
      </div><!-- .entry-meta -->
    </div><!-- .blog-author-date -->
  <?php endif; ?>

  <div class="blog-content">
    <div class="entry-content">
      <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'justfood' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'justfood' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->
  </div><!-- .blog-content -->

	<footer class="entry-footer">
		<?php justfood_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
