<?php get_header();?>

<?php

/*Template Name: Portfolio*/

?>

<section class="Description">
    <h2>
        <?php the_title();?>
    </h2>
    <h2>
        <?php echo get_post_meta(get_the_ID(), 'text-portfolio', true);?>
    </h2>
    <div class="Description-text">


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
    'post_type'   => 'portfolio',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>
    
        <div class="Description-img">
            <?php
                $photo = get_post_meta(get_the_id(), 'portfolio-img', true);
                $fullimg = pods_image_url($photo['ID'], 'large');
                echo '<img src="' . $fullimg . '" alt="" width="440" height="440">'
            ?>
        </div>
    
    <?php
}

wp_reset_postdata(); // сброс

?>

        <div class="Description-box-text">
            <div class="Description-box-1">
                <h2>Універсальний ЯЛ-6-СП</h2>
                <p>Серед інших шлюпок ЯЛ-6-СП, саме шестивесельний ЯЛ-6-СП набув найбільшого поширення в радянські часи, і тому чимало причин. Головна - оптимальне поєднання місткості, вантажопідйомності і мореплавства. І сьогодні ЯЛ-6-СП можна назвати найпопулярнішим проектом шлюпки на території України.</p>
            </div>
            <div class="Description-box-1">
                <h2>Проект ЯЛ-6-СП</h2>
                <p>Шлюпка з орігінального проекту ЯЛ-6-СП зі збереженням обводів корпусу. Збережені повністю оригінальні обводи корпусу дерев'яного Яла.</p>
            </div>
            <div class="Description-box-1-1">
                <h2>Прогулянкова шлюпка</h2>
                <p>ЯЛ-6-СП можна використовувати як прогулянкову шлюпку, для навчання як весловому, так і парусної практиці. Шлюпка ЯЛ-6-СП стала класикою в походах по великих озерах і річках України.</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>

<?php 

// $photo = get_post_meta(get_the_id(), 'team-img', true);

// $fullimg = pods_image_url($photo['ID'], 'large');

// echo '<img src = "' . $fullimg .'" alt="set">'

?>
