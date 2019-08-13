<?php get_header(); ?>
<div class="container">
    <h1> <?php the_title(); ?></h1>
<!-- add featured image -->
    <?php if (has_post_thumbnail()) : ?>
            <img src = <?php the_post_thumbnail_url("smallest"); ?> class="img-fluid">
        <?php endif; ?>

        <?php (have_posts()); ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Display Post Content -->

                <?php (the_content()); ?>

            <?php endwhile;
        endif; ?>
</div>


<?php get_footer(); ?>