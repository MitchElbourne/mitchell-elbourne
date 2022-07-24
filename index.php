<?php get_header(); ?>

<main class="container">
  <section id="splash">
    <h1 class="">Blog.</h1>

    <!-- <h2 class="code green h3"></h2> -->
  </section>

  <?php if (have_posts()) { ?>
    <section id="blog-posts">
      <?php
      while (have_posts()) {
        the_post();
        ?>
        <div class="post">
          <h2 class="h4"><?php echo get_the_title(); ?></h2>
        </div>
        <?php
      } ?>
    </section>
  <?php } else { ?>
    <h2>No blog posts to show, check back soon!</h2>
  <?php } ?>


</main>

<?php get_footer(); ?>