<?php
$random_args = array(
    'posts_per_page' => 5,
    'orderby' => 'rand',
);
$random_query = new WP_Query($random_args);
if ($random_query->have_posts()) :
    echo '<div class="widget random-posts">';
    echo '<h3 class="widget-title"><i class="fa-solid fa-shuffle"></i> Random Posts</h3>';
    echo '<ul>';
    while ($random_query->have_posts()) : $random_query->the_post();
        echo '<li>';
        echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
        echo '<span class="date">' . get_the_date() . '</span>';
        echo '</li>';
    endwhile;
    wp_reset_postdata();
    echo '</ul>';
    echo '</div>';
endif;
