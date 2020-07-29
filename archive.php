<?php get_header(); ?>
<main class="">
  <div class="container">
    <?php
    $current_cat_ID = get_query_var('cat');
    $args = array('category' => $current_cat_ID, 'post_type' =>  'post');
    $postsList = get_posts($args);
    foreach ($postsList as $post) :  setup_postdata($post);
    ?>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php the_post_thumbnail(); ?>
      <?php the_excerpt(); ?>
    <?php endforeach; ?>
  </div>
</main>
<?php get_footer(); ?>