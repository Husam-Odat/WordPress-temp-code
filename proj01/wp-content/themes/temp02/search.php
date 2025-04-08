<!-- search page -->
<?php get_header(); ?>

<div class="search-page py-3">
    <div class="container">
        <div class="search-head">
            <h3 class="search-title">
                <?php
                // echo "Search Results for: [" . get_search_query() . "] Found : [" . $wp_query->found_posts . " ] Results";
                // printf(__('Search Results for: %s', 'temp02'), '<span>[' . get_search_query() . ']</span>' . ' <span> Found : [' . $wp_query->found_posts . ' ] Results </span>');
                ?>


            </h3>
            <?php echo title_box('Search Results for: ' . get_search_query(), ' <span> Found : [' . $wp_query->found_posts . ' ] Results </span>', 1); ?>
        </div>
        <div class="search-results">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="search-item">
                        <div class="search-item-title title">
                            <a class="search-item-title link" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="search-item-content excerpt">
                            <?php echo the_excerpt(); ?>
                        </div>
                        <div class="search-item-content time">
                            <?php the_time('j F Y'); ?>
                        </div>
                        <?php if (has_category()): ?>
                            <div class="search-item-content category">
                                <?php the_category(' &bull; '); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="search-no-results">
                    <h2 class="search-no-results-title">
                        <?php _e('No Results Found', 'temp02'); ?>
                    </h2>
                    <p class="search-no-results-content">
                        <?php _e(
                            'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
                            'temp02'
                        ); ?>
                    </p>
                    <?php // get_search_form(); 
                    ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>