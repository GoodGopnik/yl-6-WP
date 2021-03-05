<?php get_header();?>

<?php

/*Template Name: Module*/

?>

<section class="Module">
    <h2 id="mod">

    <?php the_title();?>

    </h2>
    <div class="Module-Photo">
        
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
        'post_type'   => 'Module',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    foreach( $posts as $post ){
        setup_postdata($post);
    ?>

        <a data-fancybox="gallery" href="<?php echo get_the_post_thumbnail_url();?>">
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        </a>

        <?php
    }

    wp_reset_postdata(); // сброс

    ?>
        
    <iframe class="Module-video" width="1200" height="600" src="https://www.youtube.com/embed/hP6eTv3N3JA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>


<?php get_footer();?>