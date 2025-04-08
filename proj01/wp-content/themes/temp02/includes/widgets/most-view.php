<div class="widget most-viewed">
    <h3 class="widget-title">
        <i class="fa-regular fa-star"></i>
        Most Viewed
    </h3>
    <ul>
        <?php
        $most_viewed = new WP_Query(array(
            'order'           => 'DESC',
            'meta_key'        => 'post_views_count',
            'orderby'         => 'meta_value_num',
            'posts_per_page'  => 6
        ));
        if ($most_viewed->have_posts()) :
            while ($most_viewed->have_posts()) :
                $most_viewed->the_post() ?>
                <li>
                    <div class="info">
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        <div class="category"><?php echo get_the_category()[0]->name; ?></div>
                        <div class="test">
                            <?php // the_category() 
                            ?>
                            <?php // echo get_the_category()[0]->name; 
                            ?>
                            <?php // print_r(get_the_category()); 
                            ?>
                        </div>
                    </div>
                    <div class="views">
                        <i class="fa-regular fa-eye"></i>
                        <span><?php echo get_post_meta(get_the_ID(), 'post_views_count', true) ?></span>
                    </div>
                </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </ul>
</div>