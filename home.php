<?php get_header(); ?>

<?php get_template_part( 'partials/nav'); ?>

<div class="row" id="main-content">

  <div class="col-lg-9 col-sm-8" id="home-posts">
    <?php if (have_posts()) :
      while (have_posts()):
        the_post();
        the_content();
        endwhile;
      endif; 
    ?>
  </div>

  <div class="col-lg-3 col-sm-4" id="sidebar">
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>