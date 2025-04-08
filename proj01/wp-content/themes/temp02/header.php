<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>


    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <title><?php
            wp_title('|', true, "right");
            bloginfo('name');
            ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

    <?php wp_head();
    ?>
    <!-- cairo font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <!-- Default theme color -->
    <meta name="theme-color" content="#0dcaf0">
    <!-- Fallback for older browsers -->
    <meta name="msapplication-navbutton-color" content="#0dcaf0">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0dcaf0">

    <style>
        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #0dcaf0;
            /* Background color when active */

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-info">
        <!-- <nav class="navbar navbar-expand-md navbar-dark"> -->
        <div class="container">
            <!-- <div class="container-fluid"> -->
            <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="main-menu">
                <?php header_menu(); ?>
            </div>
        </div>
    </nav>