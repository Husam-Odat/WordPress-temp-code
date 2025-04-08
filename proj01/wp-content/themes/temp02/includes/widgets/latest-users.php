<div class="widget latest-users">
    <h3 class="widget-title">
        <i class="fa-solid fa-users"></i>
        Latest Users
        <h3>
            <ul>
                <?php
                $users = get_users(array(
                    'role' => 'subscriber',
                    'orderby' => 'registered',
                    'order' => 'DESC',
                    'number' => 5
                ));


                foreach ($users as $user) :
                    echo '<li>';
                    echo get_avatar($user->ID, 45);
                    echo '<div class="info">';
                    echo '<a href="' . get_author_posts_url($user->ID) . '">' . $user->user_login . '</a>';
                    echo '<span class="register-date">' . substr($user->user_registered, 0, 10) . '</span>';
                    echo '</div>';
                    echo '</li>';
                endforeach;
                wp_reset_postdata();

                ?>
            </ul>
</div>