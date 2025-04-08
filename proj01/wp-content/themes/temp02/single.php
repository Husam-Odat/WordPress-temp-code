<?php get_header(); ?>

<div class="post-detail">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>

            <p><strong>Date:</strong> <?php echo get_the_date(); ?></p>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <p><strong>Categories:</strong> <?php the_category(', '); ?></p>

        <?php endwhile;
    else : ?>
        <p>Sorry, no post found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>