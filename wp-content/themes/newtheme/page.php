<?php get_header(); ?>
<div class="container">
    <h1 class="heading"> <?php the_title(); ?></h1>
</div>   
<?php (have_posts());?>
    <div>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <!-- Display Post Content -->

            <?php (the_content());?>

        <?php endwhile; endif;?>
    </div>
    <div id=”test-content”>
    
        </div>

        <?php get_footer(); ?>