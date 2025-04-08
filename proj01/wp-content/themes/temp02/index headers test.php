<?php get_header(); ?>

<div class="container">

    <div class="title-box">
        <h2 class="title-one">Title-one </h2>
        <p class="description">
            Title-one Description
        </p>
    </div>
    <div class="title-box">
        <h2 class="title-two">Title-two </h2>
        <p class="description">
            Title-two Description
        </p>
    </div>
    <div class="title-box">
        <h2 class="title-three">Title-three </h2>
        <p class="description">
            Title-three Description
        </p>
    </div>
    <div class="title-box">
        <h2 class="title-four">Title-four </h2>
        <p class="description">
            Title-four Description
        </p>
    </div>
    <div class="title-box">
        <h2 class="title-five">Title-five </h2>
        <p class="description">
            Title-five Description
        </p>
    </div>
    <?php
    echo title_box('title test1', 'description test2');
    echo title_box('title test1', "1", 2);
    echo title_box('title test1', 'description test2', 3);
    echo title_box('title test1', 'description test2', 4);
    echo title_box('title test1', 'description test2', 5);
    echo title_box();
    ?>


</div>



<?php get_footer(); ?>