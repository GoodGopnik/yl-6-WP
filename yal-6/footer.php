<section class="Contact">
    <div class="Contact-text">
        <h2>Якщо вас щось зацікавило або є питання звертайтеся до нас</h2>
            
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
    'post_type'   => '_contact',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

            <div class="nomber">
                <a href="tel:<?php echo get_post_meta(get_the_ID(), 'mobile1', true);?>">&#9990;<?php echo get_post_meta(get_the_ID(), 'mobile1', true);?></a>
                <a href="tel:<?php echo get_post_meta(get_the_ID(), 'mobile2', true);?>">&#9990;<?php echo get_post_meta(get_the_ID(), 'mobile2', true);?></a>
                <p><?php echo get_post_meta(get_the_ID(), 'mail111', true);?></p>
                    <div class="Hop">
                        <p>ФОП Дудник Володимир Євгенович</p>
                        <p>ЄРДПУ 2798912191</p>
                    </div>
            </div>

    <?php
}

wp_reset_postdata(); // сброс

?>

    </div>
</section>
</div><!-- end wrapper -->
<script src = "https://code.jquery.com/jquery-3.4.1.min.js"> </script>

<?php wp_footer(); ?>

</body>
</html>