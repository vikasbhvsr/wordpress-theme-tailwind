<?php get_header(); ?>
<main class="">
  <h1 class="text-4xl font-bold"><?php single_post_title(); ?></h1>
  <div class="container grid md:grid-cols-2 gap-4">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
    ?>
        <article class="flex bg-gray-600 rounded-lg relative overflow-hidden h-64 w-full text-white">
          <a class="absolute w-full h-full" href="<?php the_permalink(); ?>"></a>
          <?php the_post_thumbnail('large', array(
            'class' => 'absolute w-full h-full object-cover hover:scale-125'
          )); ?>
          <div class="p-6 flex flex-col z-10 items-start justify-end w-full h-full">
            <a class="blog-link" href="<?php the_permalink(); ?>">
              <?php the_title('<h3 class="text-3xl font-bold blog-title">', '</h3>', true); ?>
            </a>
            <a class="flex items-center space-x-1 blog-author-link" href="<?php the_author_link(); ?>">
              <i class="mr-2 fas fa-xs fa-user-tag"></i>
              <p class="blog-author"><?php the_author(); ?></p>
            </a>
            <div class="flex flex-wrap items-center space-x-1 blog-categories">
              <i class="mr-2 fas fa-xs fa-th-large"></i>
              <?php the_category('<i class="fas w-2 h-2 fa-circle"></i>', " "); ?>
            </div>
            <div class="flex flex-wrap items-center space-x-1 blog-tags">
              <?php the_tags('<i class="mr-2 fas fa-xs fa-tag"></i>', '<i class="fas w-3 h-3 fa-grip-lines-vertical"></i>', '') ?>
            </div>
          </div>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>