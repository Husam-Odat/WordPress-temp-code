<?php
$parent_cat = get_queried_object();
$child_args = array(
    'child_of' => $parent_cat->term_id,
    'order'    => 'ASC',
    'orderby'  => 'id',
    'hide_empty' => 0
);
$child_cats = get_categories($child_args);
if (count($child_cats) > 0) :
?>
    <div class="widget child-cats">
        <h3 class="widget-title">
            <i class="fa-solid fa-folder"></i>
            Child Categories
        </h3>
        <ul>
            <?php foreach ($child_cats as $category) : ?>
                <li>
                    <a href="<?php echo get_category_link($category->term_id) ?>">
                        <?php echo $category->name; ?>
                    </a>
                    <span class="count"><?php echo $category->count; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>