<div class="search-box">


    <!-- search form -->
    <form role="search" method="get" class="search-form" action="">
        <?php //echo home_url('/'); 
        ?>
        <label>
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>"
                value="<?php echo get_search_query() ?>" name="s" />
        </label>
        <button type="submit" class="search-submit">
            <span class="search-icon">
                <i class="fas fa-search"></i>
            </span>
            <?php  // echo _x('Search', 'submit button') 
            ?>
        </button>
    </form>
</div>