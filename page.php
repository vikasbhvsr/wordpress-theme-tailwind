<?php
get_header();
?>
<main class="">
    <div class="container">
    <h1 class="text-4xl font-bold"><?php single_post_title(); ?></h1> <!-- Page Title -->
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
    <?php
    endwhile; //resetting the page loop
    ?>
    </div><!-- #content -->
  </main>
<?php
get_footer();
?>