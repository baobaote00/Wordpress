<?php get_header(); ?>

<div class="row">
    <div class="col-md-8">
        <?php while (have_posts()) : the_post(); ?>

            <a href="<?php the_permalink() ?>" style="display: block; color: red;">
                <?php the_title(); ?>
            </a>

        <?php endwhile; ?>
    </div>
    <div class="col-md-4">
        <?php dynamic_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>