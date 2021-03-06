<?php get_header(); ?>



<?php while(have_posts()){the_post(); ?>

    <section class="hero hero_opaque">
      <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h1 class="hero_title rowcol1 font_size_2"><?php echo get_post_meta(get_the_ID(), 'A_titulo_principal', true)?></h1>
      <div class="redDot header_activator"></div>
      <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
        <use xlink:href="#arrow_down"></use>
      </svg>
    </section>


    <section class="flati">
        <?php include 'assets/perceptive_brain.svg'; ?>
        <!-- <img class="flati_icon" src="" alt=""> -->
        <div class="flati_deco"></div>
        <h5 class="flati_title font_size_4"><?php echo get_post_meta(get_the_ID(), 'B_texto_azul_seccion_2', true)?></h5>
        <p class="flati_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'C_texto_negro_seccion_2', true)?></p>
    </section>






    <section class="showcase4 tall_img">
        <h3 class="showcase_title font_size_3 simple_title">Descubre nuestros Programas de Resiliencia</h3>

        <?php
        // $args = array('post_type'=>'programa',);
        $programas=new WP_Query(array('post_type'=>'programa'));
        while($programas->have_posts()){$programas->the_post(); ?>

            <?php simpla_card_tall(); ?>

        <?php } wp_reset_query(); ?>

    </section>



    <section class="showcase3">
        <h3 class="showcase_title font_size_3 simple_title">Herramientas que te servirán para...</h3>


        <div class="hosi">
            <?php include 'assets/shield.svg'; ?>
            <p class="hosi_txt font_size_5">Reducir estrés y ansiedad.</p>
        </div>

        <div class="hosi">
            <?php include 'assets/emotional_intelligence.svg'; ?>
            <p class="hosi_txt font_size_5">
                Aumentar la inteligencia emocional.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/sleepy_moon.svg'; ?>
            <p class="hosi_txt font_size_5">
                Crear un sueño más profundo y reparador.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/map_compose.svg'; ?>
            <p class="hosi_txt font_size_5">
                Ver “the big picture” para poder apreciar mejor los detalles.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/listening_ear.svg'; ?>
            <p class="hosi_txt font_size_5">
                Mejorar la escucha activa, la concentración y creatividad.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/perceptive_brain.svg'; ?>
            <p class="hosi_txt font_size_5">
                Crear una percepción flexible para mejorar la respuesta ante diferentes situaciones.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/opportunity.svg'; ?>
            <p class="hosi_txt font_size_5">
                Afrontar el cambio y aprovechar las oportunidades que nos brinda.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/relationship.svg'; ?>
            <p class="hosi_txt font_size_5">
                Mejorar las relaciones interpersonales.
            </p>
        </div>

        <div class="hosi">
            <?php include 'assets/happy_brain.svg'; ?>
            <p class="hosi_txt font_size_5">
                Hacernos más resistentes a la depresión.
            </p>
        </div>
    </section>










    <section class="tesim_container Carousel">
      <h3 class="testim_title font_size_3">Testimonios</h3>

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
            <svg class="tesim_icon" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 38 34">
              <use xlink:href="#quote_icon"></use>
            </svg>
            <div class="tesim_txt"><?php the_content(); ?></div>
            <p class="tesim_author"><?php the_title(); ?></p>
          </quote>
          <?php $i=$i+1; } wp_reset_query(); ?>
        </div>


        <button class="prenex prenex_prev row2col1 dark" id="prevButton"></button>
        <button class="prenex prenex_next row2col1 dark" id="nextButton"></button>
        <a href="" class="testim_link">VER MÁS TESTIMONIOS</a>
      </section>

    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
