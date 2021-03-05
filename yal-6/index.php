<?php 

get_header();

?>

<?php

/*Template Name: Home*/

?>  

<!---------------------- Photo heard ------------------------->
<section class="Welcome">
    <div class="container">
        <div class="welcome-img">
            <h1>Шестивесельна шлюпка ЯЛ-6-СП</h1>
            <p>Ціна від 221 000 &#8372;</p>
        </div>
    </div>
</section>
<!---------------------- specifications ------------------------->
<section class="specifications">
    <div class="specifications-text">
        <h2 id="in">Основні дані шлюпки ЯЛ-6-СП</h2>
        <div class="specifications-text-box-1-1">
            <div class="input-1-1">Характеристика</div>
            <div class="input-1-1">Значення</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">Довжина</div>
            <div class="input-2">6,11 метра</div>
        </div>
        <div class="specifications-text-box-1">
            <div class="input-1">Ширина</div>
            <div class="input-1">1,87 метра</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">Вага ЯЛ-6-СП</div>
            <div class="input-2">450 кг</div>
        </div>
        <div class="specifications-text-box-1">
            <div class="input-1">Вага ЯЛ-6-СП зі спорядженням (тереотично)</div>
            <div class="input-1-nomber">650 кг</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">Повна водотоннажність (тереотично)</div>
            <div class="input-2-nomber">1,800 т.</div>
        </div>
        <div class="specifications-text-box-1">
            <div class="input-1">Висота від кіля до планширя (по міделю)</div>
            <div class="input-1-nomber">0,95 м.</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">Осідання середнє при новій водотоннажності</div>
            <div class="input-2-nomber">0,4 м.</div>
        </div>
        <div class="specifications-text-box-1-1">
            <div class="input-1-1">Екіпаж шлюпки ЯЛ-6-СП</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">до 10 осіб на веслах</div>
            <div class="input-2">до 9 осіб під вітрилами (або мотор)</div>
        </div>
        <div class="specifications-text-box-1-1">
            <div class="input-1-1">Можливість експлуатації</div>
        </div>
        <div class="specifications-text-box-2">
            <div class="input-2">Вітрила не більше 5 балів</div>
            <div class="input-2">Мотор не більше 5 балів</div>
        </div>
    </div>
</section>
<!---------------------- Description ------------------------->
<section class="Description">
    <h2>ОПИС ЯЛ-6-СП</h2>
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
                                'post_type'   => 'Home',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                            ?>

                                <div class="Description-img">
                                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" width="440" height="440">
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
<!---------------------- Photo and video ------------------------->

<!---------------------- Price ------------------------->
<section class="Price">
    <div class="Price-text">
        <h2>НАШ ПРАЙС-ЛИСТ НА ЯЛ-6-СП</h2>
        <div class="Price-text-box-1-1">
            <div class="input-Price-1-1">Найменування</div>
            <div class="input-Price-1-1">Штук у комплекті</div>
            <div class="input-Price-1-1">Сума у гривнях</div>
        </div>
        <div class="Price-text-box-2">
            <div class="input-Price-2">ОБЛАДНЕННЯ ДЛЯ ВЕСЛУВАННЯ</div>
        </div>


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
    'post_type'   => '_sale_of_boats',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

    <div class="Price-text-box-1">
            <div class="input-Price-1">
            <?php echo get_post_meta(get_the_ID(), 'name-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'namber-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'price-tov', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>

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
    'post_type'   => '_total_price',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

        <div class="Price-text-box-2-total">
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'together', true);?>
            </div>
            <div class="input-Price-2-total"></div>
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'totalprice', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>


        <div class="Price-text-box-1">
            <div class="input-Price-1">ДОДАТКОВЕ ОБЛАДНАННЯ ДЛЯ ВІТРИЛА</div>
        </div>



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
    'post_type'   => '_sail',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

    <div class="Price-text-box-1">
            <div class="input-Price-1">
            <?php echo get_post_meta(get_the_ID(), 'name-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'namber-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'price-tov', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>


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
    'post_type'   => '_total_price2',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

        <div class="Price-text-box-2-total">
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'together', true);?>
            </div>
            <div class="input-Price-2-total"></div>
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'totalprice', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>

    </div>
</section>
<!---------------------- Module ------------------------->

<!---------------------- Module-Price ------------------------->
<section class="Module-Price">
    <div class="Price-text">
        <h2>ПРАЙС-ЛИСТ НА МОДУЛЬ</h2>
        <div class="Price-text-box-1-1">
            <div class="input-Price-1-1">Найменування</div>
            <div class="input-Price-1-1">Штук у комплекті</div>
            <div class="input-Price-1-1">Сума у гривнях</div>
        </div>
        <div class="Price-text-box-2">
            <div class="input-Price-2">ОБЛАДНЕННЯ ДЛЯ ЗБЕРІГАННЯ ТА ПЕРЕОДЯГАННЯ</div>
        </div>

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
    'post_type'   => '_price_module',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

    <div class="Price-text-box-1">
            <div class="input-Price-1">
            <?php echo get_post_meta(get_the_ID(), 'name-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'namber-tov', true);?>
            </div>
            <div class="input-Price-1">
                <?php echo get_post_meta(get_the_ID(), 'price-tov', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>

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
    'post_type'   => '_total_price3',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
   ?>

        <div class="Price-text-box-2-total">
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'together', true);?>
            </div>
            <div class="input-Price-2-total"></div>
            <div class="input-Price-2-total">
                <?php echo get_post_meta(get_the_ID(), 'totalprice', true);?>
            </div>
        </div>

    <?php
}

wp_reset_postdata(); // сброс

?>
</section>
<!---------------------- Comments ------------------------->   
<section class="comments-about">
    <h2>Коментарии</h2>
    
    <?php 
        $comments = get_comments();
        $args = array('class' => 'mr-3');
        foreach ( $comments as $comment ) {
    ?>

    <div class="comments-block">
        <div class="comments-img">
            <?php echo get_avatar($comment->author_email, 64, null, null, $args);?>
        </div>
            <div class="comments-text">
                <h3><?php comment_author(); ?></h2>
                    <?php comment_date('d.m.Y'); ?>
                        <p><?php echo $comment->comment_content; ?></p>
            </div>
    </div>

    <?php }?>
    <hr>
    <?php 
        $defaults = [
            'fields'               => [
                'author' => '<div class="comment-block-input">
                    <label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
                    <input id="author" name="author" class="comment-input" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
                </div>',
                'email'  => '<div class="comment-block-input">
                    <label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
                    <input id="email" name="email" class="comment-input" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
                </div>',      
            ],
            'comment_field'        => '<div class="comment-block-input">
                <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
                <textarea id="comment" name="comment" class="comment-input" aria-required="true" required="required"></textarea>
            </div>',
        ];
        
        comment_form( $defaults );
    ?>
    <!-- <?php echo do_shortcode( '[anycomment include="true"]' ); ?> -->

</section>
<!---------------------- Contact ------------------------->
<?php 

get_footer();

?>

