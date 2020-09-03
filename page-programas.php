<?php get_header(); ?>



<?php while(have_posts()){the_post(); ?>
    
    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <div class="redDot header_activator"></div>
    </section>


    <section class="flati">
        <img class="flati_icon" src="" alt="">
        <div class="flati_deco"></div>
        <h5 class="flati_title">¡Aprende a cuidar de tu mente de una manera creativa, divertida y guiada!</h5>
        <p class="flati_txt">
            La Resiliencia aplicada a humanos se entiende como
            la capacidad para “rebotar” de experiencias difíciles y
            de salir fortalecidos, tras pasar por una experiencia
            traumática o un periodo de estrés y ansiedad, por
            ejemplo.<br><br>
            Cuando incorporamos actitudes y prácticas
            de resiliencia en nuestras vidas, se nos abren
            las puertas para vivir el presente con una mente más
            sana y un corazón más feliz.<br><br>
            Cualquier persona puede aprenderlas.
        </p>
    </section>






    <section class="showcase4 tall_img">
        <h3 class="showcase_title">Descubre nuestros Programas de Resiliencia</h3>

        <?php
        // $args = array('post_type'=>'programa');
        $programas=new WP_Query(array('post_type'=>'programa'));
        while($programas->have_posts()){$programas->the_post(); ?>

            <?php simpla_card(); ?>

        <?php } wp_reset_query(); ?>
        
    </section>










    <section class="tesim_container Carousel">
        <h3 class="">¿En qué podemos ayudarte?</h3>

        <div class="tesim_cont Element row2col1">
            <?php
            $i = 0;
            $args = array(
                'post_type'=>'testimonial',
            );
            $testimonials=new WP_Query($args);
            while($testimonials->have_posts()){$testimonials->the_post();?>
                <?php if ( !($i & 1) AND $i ) { ?>
                    </div>
                    <div class="tesim_cont Element row2col1">
                <?php } ?>
                <quote class="tesim">
                    <p class="tesim_icon">"</p>
                    <div class="tesim_txt"><?php the_content(); ?></div>
                    <p class="tesim_author"><?php the_title(); ?></p>
                </quote>
            <?php $i=$i+1; } wp_reset_query(); ?>
        </div>


        <button class="prenex prenex_prev row2col1" id="prevButton"></button>
        <button class="prenex prenex_next row2col1" id="nextButton"></button>
    </section>

    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>