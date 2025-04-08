<?php get_header(); ?>
<div class="homepage">

    <!-- Start intro section -->
    <div class="section intro">
        <div class="container">
            <?php echo title_box('Welcome to ' . get_bloginfo('name'), get_bloginfo('description'), 5); ?>
            <?php get_search_form(); ?>
        </div>
    </div>
    <!-- End intro section -->
    <!-- start movies section -->
    <div class="movies section">
        <div class="container">
            <?php echo title_box('Movies', 'Leatest Add Moves', 3); ?>

            <div class="single-post">
                <?php
                $movies_arg = array(
                    // 'post_type' => 'post',
                    'posts_per_page' => -1,
                    // 'category_name' => 'movie'
                    'cat' => 11,
                    // 'order' => 'ASC'
                );
                $movies = new WP_Query($movies_arg);
                // echo '<pre>';
                // print_r($movies);

                // echo '<pre>';

                ?>
                <?php if ($movies->have_posts()) : ?>
                    <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail('full'); ?>

                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- Start Books Section -->
    <div class="section books">
        <div class="container">
            <?php echo title_box("Books", "Latest Added Books", 3) ?>
            <div class="multiple-posts">
                <?php
                $books_arg = array(
                    'posts_per_page' => 6,
                    'cat'            => 3,
                );
                $books = new WP_Query($books_arg);
                if ($books->have_posts()) :
                    while ($books->have_posts()) :
                        $books->the_post(); ?>
                        <div class="book">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail("full") ?>
                            </a>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <div class="excerpt">
                                <?php echo get_the_excerpt() ?>
                            </div>
                            <div class="date">
                                <?php echo get_the_date() ?>

                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End Books Section -->



    <!-- Start random posts Section -->
    <div class="section random-posts">
        <div class="container">
            <?php echo title_box("Random Posta", "Some Random Posts", 4) ?>
            <div class="posts-container">
                <?php
                $random_arg = array(
                    'posts_per_page' => 8,
                    'orderby'            => 'rand',



                );


                $random = new WP_Query($random_arg);
                if ($random->have_posts()) :
                    while ($random->have_posts()) :
                        $random->the_post();
                        //get parent category link
                        $categories = get_the_category();
                        // echo '<pre>';
                        // print_r($categories);
                        // echo '</pre>';
                        $parent_cat = " ";
                        // $number_of_posts = 0;
                        foreach ($categories as $cat) {
                            if ($cat->parent) {
                                $the_parent_cat = get_category($cat->parent);
                                $parent_cat = $the_parent_cat->name;
                                // $number_of_posts = $the_parent_cat->count; // Correctly fetch the post count

                                // $parent_cat_count = $the_parent_cat->category_count;
                                // $parent_cat_id = $the_parent_cat->id;

                            }
                        }
                        $parent_cat_link = esc_url(get_category_link($the_parent_cat->term_id));
                        // i want to add number of posts in the parent category
                        // $number_of_posts = $the_parent_cat->category_count;



                        // Display the parent category with the number of posts
                        if (!empty($parent_cat)) {
                            $parent_cat_comp = '<a href="' . $parent_cat_link . '">' . $parent_cat .  '</a> ';
                        }

                        // make it with a tag
                        // $parent_cat_comp = '<a href=' . $parent_cat_link . '>' . $parent_cat . $number_of_posts . '</a> <span> > </span';




                ?>

                        <div class="post">

                            <!-- <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail("full") ?>
                            </a> -->
                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <div class="excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                            </div>
                            <div class="info">
                                <span class="date">
                                    <!-- Add At  -->
                                    <i class="fa-regular fa-calendar fa-fw" aria-hidden="true"></i>
                                    [<?php echo get_the_date() ?>]
                                </span>

                                <span class="auther">
                                    <!-- By  -->
                                    <i class="fa-regular fa-user fa-fw" aria-hidden="true"></i>
                                    [<?php the_author() ?>]
                                </span>
                                <span class="category">
                                    <!-- In  -->
                                    <i class="fa-solid fa-tags fa-fw" aria-hidden="true"></i>
                                    [ <?php echo $parent_cat_comp ?> >
                                    <?php echo get_the_category_list(" | ") ?>]
                                </span>
                                <span class="comments">
                                    <!-- # of Comments : -->
                                    <i class="fa-regular fa-comments fa-fw" aria-hidden="true"></i>
                                    <?php
                                    comments_number('0', '1', '%');
                                    //comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comments-link', 'Comments Disabled');
                                    ?>
                                </span>

                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End random posts Section -->



    <!-- Start movies Section -->
    <div class="section movies">
        <div class="container">
            <?php echo title_box("movies", "Latest Added movies", 3) ?>
            <div class="movies-container">
                <?php
                $movies_arg = array(
                    'posts_per_page' => -1,
                    'cat'            => 11,
                );
                $movies = new WP_Query($movies_arg);
                if ($movies->have_posts()) :
                    while ($movies->have_posts()) :
                        $movies->the_post(); ?>
                        <div class="movie">
                            <a class="main-link" href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail("full") ?>
                            </a>
                            <span class="id">
                                <?php echo get_the_id() ?>
                            </span>
                            <span class="comments">
                                <i class="fa-regular
                                    fa-comments fa-fw" aria-hidden="true"></i>
                                <?php
                                comments_number('0', '1', '%');
                                //comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comments-link', 'Comments Disabled');
                                ?>
                            </span>
                            <?php
                            // Get the author's ID
                            $author_id = get_the_author_meta('ID');

                            // Get the author's display name (if needed)
                            $author_name = get_the_author_meta('display_name', $author_id);

                            // Get the author's avatar (image)
                            $author_avatar = get_avatar($author_id, 64);

                            // Get the author's link to their posts
                            $author_link = get_author_posts_url($author_id);

                            // Output the author's avatar with a link
                            echo '<a class="author" href="' . esc_url($author_link) . '">' . $author_avatar . '</a>';
                            ?>

                            <!-- Start Info -->
                            <div class="info">
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                <div class="excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 5); ?>
                                </div>

                                <div class="data">
                                    <span class="date">
                                        <!-- Add At  -->
                                        <i class="fa-regular fa-calendar fa-fw" aria-hidden="true"></i>

                                        [<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>]

                                    </span>

                                    <span class="auther">
                                        <!-- By  -->
                                        <i class="fa-regular
                                    fa-user fa-fw" aria-hidden="true"></i>
                                        [<?php the_author() ?>]
                                    </span>


                                </div>
                                <div class="tags">
                                    <i class="fa-solid fa-tags fa-fw" aria-hidden="true"></i>
                                    <?php
                                    $tahs = get_the_tags();
                                    if ($tahs) {
                                        foreach ($tahs as $tag) {
                                            echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . $tag->name . '</a> ';
                                        }
                                    }

                                    ?>
                                    <?php echo get_the_category_list("  ") ?>
                                </div>
                                <!-- 
                                <span class="category tags">

                                    <?php //echo get_the_category_list(" | ") 
                                    ?>
                                </span> -->
                                <!-- <div class="tags">
                                    <i class="fa-solid fa-tags fa-fw" aria-hidden="true"></i>
                                    <?php //echo get_the_tag_list($before = ' * ',    $sep = ' | ',    $after = ' * ') 
                                    ?>
                                </div> -->
                            </div>
                            <!-- End Info -->


                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- End movies Section -->





</div>


<?php get_footer(); ?>