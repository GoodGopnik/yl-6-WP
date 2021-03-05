<?php get_header();?>

<?php

/*Template Name: Photo-and-video*/

?>

<section class="Photo-and-Video">
    <h2 id="ft">

        <?php the_title();?>

    </h2>
    <div class="Photo-block">

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
                'post_type'   => 'Photo-and-video',
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

        <iframe class="sport-video" width="1200" height="600" src="https://www.youtube.com/embed/tMI5M6TeRdM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>


<?php get_footer();?>