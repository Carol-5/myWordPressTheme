<?php get_header(); ?>

<div class="container">
  <h1 class="heading"> <?php the_title(); ?></h1>
  <!-- add featured image -->
  <?php if (has_post_thumbnail()) : ?>
    <img src=<?php the_post_thumbnail_url("largest"); ?> class="img-fluid style_image">
  <?php endif; ?>
  <?php (have_posts()); ?>
  <div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Display Post Content -->

        <?php (the_content()); ?>

      <?php endwhile;
    endif; ?>
  </div>
  <div id=”test-content”>

  </div>

</div>

<div class="row">
  <div class="col">
  

  </div>
</div>

</div>
<div class="col">

</div>
</div>


<?php get_footer(); ?>