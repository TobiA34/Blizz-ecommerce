<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body>




    <header class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center justify-content-between">
                    <a href="<?php bloginfo('url');?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo1.png" class="img-fluid logo" alt="">
                    </a>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => "top-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                        'menu_class' => "top-menu d-flex", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.

                    ))


                    ?>

                </div>
            </div>
        </div>

        </nav>
    </header>