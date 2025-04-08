<?php $url = wp_get_attachment_url(62); ?>


<?php if (!is_user_logged_in()) : ?>
    <div class="widget">
        <h3 class="widget-title">Template Directory Ad Guest<h3>
                <a href="#">
                    <!-- <img src="<?php //echo get_template_directory_uri(); 
                                    ?>/uploads/2025/04/offer-test2.jpg"
                        alt="Offer Test 1"> -->
                    <img src="<?php echo $url ?>" alt="Offer Test 1">
                </a>
    </div>
<?php endif; ?>