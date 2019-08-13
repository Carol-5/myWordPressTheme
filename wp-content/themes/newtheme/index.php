<?php get_header(); ?>

<?php get_sidebar(); ?>
<?php wp_index();?>
<div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Display Post Content -->

        <?php (the_content()); ?>

      <?php endwhile;
    endif; ?>
  </div>
<section>
    <h3> creating a new section on the front page I think. 
        This is not as easy as they say it is , but I still do have alot 
         to learn!
</h3>
</section>
	
<?php get_footer(); ?>