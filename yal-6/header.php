<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Купити шлюпку ЯЛ-6-СП ФОП Дудник Володимир Євгенович</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

    <?php 
    
    wp_head();?>

    <?php

    /*Template Name: Header*/

    ?>  


</head>
<body>
<div class="wrapper">
    <header>
        <div class="container">
            <nav class="headerMenu">
                <ul class="logo-block">
                    <div class="logo-ink">

                        <?php 
                                    
                                    // параметры по умолчанию
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'Header',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                            ?>

                                <li class="logo"><a href="http://yal-6.sl/">
                                <img src="<?php echo get_the_post_thumbnail_url();?>"alt="" width="70" height="70">
                                </a></li>

                                <?php
                            }

                            wp_reset_postdata(); // сброс

                        ?>

                        <li class="logo-name">ФОП Дудник Володимир Євгенович</li>
                        </div>
                        <?php 
                        wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => '', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'text-logo', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        ] );
                        ?>
                </ul>
            </nav>
        </div>
    </header>