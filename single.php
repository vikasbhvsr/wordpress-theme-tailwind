<?php get_header(); ?>
<?php if (have_posts()):
  while (have_posts()):
  the_post();
?>
  <main>
    <div class="container">
  <article>
    <?php the_title(); ?>
    <?php the_author(); ?>
    <?php the_category(); ?>
    <?php the_post_thumbnail(); ?>
    <div class="prose max-w-none">
      <?php the_content(); ?>
    </div>
  </article>
  </div>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>