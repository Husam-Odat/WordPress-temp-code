<?php get_header(); ?>
<div class="cat-head">
    <h1 class="cat-title"><?php single_cat_title(); ?></h1>
    <p class="cat-description"><?php echo category_description(); ?></p>
</div>

<div class="container sidebar">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <?php if (have_posts()):
                    while (have_posts()) :
                        the_post();  ?>
                        <div class="col-md-6">
                            <div class="card mb-4 thumbnail-wrapper">
                                <?php
                                if (the_post_thumbnail()):
                                    the_post_thumbnail('medium', array('class' => 'card-img-top img-fluid'));

                                endif;                      ?>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                </h2>
                                <p class="card-text"> <?php echo wp_trim_words(get_the_excerpt(), 5, '...'); ?>
                                </p>
                                <p class="card-text"><small class="text-muted">Posted on <?php the_time('F j, Y'); ?></small>
                                </p>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>"> Read More</a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

            </div>

        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>