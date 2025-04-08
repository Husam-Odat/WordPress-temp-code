<?php

if (is_category(18)) { // Advintures book

    include(get_template_directory() . '/includes/categories/special.php');
} elseif (is_category(array(14, 17))) { // Action , Adventure

    include(get_template_directory() . '/includes/categories/without-sidebar.php');
} else { // Default Category File

    include(get_template_directory() . '/includes/categories/base.php');
}
