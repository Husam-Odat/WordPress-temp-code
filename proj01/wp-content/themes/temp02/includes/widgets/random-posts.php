<?php

$random_current = get_queried_object();

// echo '<pre>';
// print_r($random_current);
// echo '</pre>';

$random_args = array(
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'cat' => $random_current->term_id
);

$random_query = new WP_Query($random_args);

if ($random_query->have_posts()) :
    echo '<div class="widget">';
    echo '<h3 class="widget-title">Random Posts</h3>';
    echo '<ul>';
    while ($random_query->have_posts()) : $random_query->the_post();
        echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
    endwhile;
    wp_reset_postdata();

    wp_reset_postdata();
    echo '</ul>';
    echo '</div>';
else:
    echo '<div class="widget">';
    echo '<h3 class="widget-title">No Random Posts Available</h3>';
    echo '</div>';
endif;
