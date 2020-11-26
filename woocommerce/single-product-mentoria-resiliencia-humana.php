<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>

  <section class="hero hero_opaque">
    <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 class="hero_title alt"><?php the_title(); ?></h1>
    <h2 class="hero_txt font_size_6"><?php echo the_content() ?></h2>
    <svg class="hero_arrow_down" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
      <use xlink:href="#arrow_down"></use>
    </svg>
    <div class="redDot header_activator"></div>
  </section>

  <section class="col_2_block">
    <div class="gertha_deco alt2"></div>

    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_2', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_3', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_4', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_texto_5', true); ?></p>
    </div>
    <p class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'A_descripcion_titulo_inferior', true); ?></p>
  </section>

  <section class="showcase6">
    <h3 class="showcase_title font_size_3 simple_title">Dirigido a cualquier persona que quiera cuidar<br>de su mente, desarrollar habilidades, actitudes y<br>percepciones individuales para lidiar con:</h3>
    <div class="showcase6_container">
      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/destructive_guy.svg'; ?>
        <p class="hosi_txt font_size_6">
          CONDUCTAS<br>DESTRUCTIVAS
        </p>
      </div>
      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/hard_emotions.svg'; ?>
        <p class="hosi_txt font_size_6">
          EMOCIONES<br>DIFÍCILES
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/learn_forgiveness.svg'; ?>
        <p class="hosi_txt font_size_6">
          APRENDER<br>A PERDONAR
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/trauma.svg'; ?>
        <p class="hosi_txt font_size_6">
          TRAUMAS Y<br>ABUSO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/negative_stress.svg'; ?>
        <p class="hosi_txt font_size_6">
          ESTRÉS<br>NEGATIVO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/couple_problems.svg'; ?>
        <p class="hosi_txt font_size_6">
          DIFICULTADES<br>DE PAREJA
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/panic_attack.svg'; ?>
        <p class="hosi_txt font_size_6">
          ATAQUES<br>DE PÁNICO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/adictions.svg'; ?>
        <p class="hosi_txt font_size_6">
          ADICCIONES<br>ALCOHOL, DROGAS
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/insomnio.svg'; ?>
        <p class="hosi_txt font_size_6">
          INSOMNIO
        </p>
      </div>

      <div class="hosi" style="color:#C0CED3">
        <?php include get_template_directory().'/assets/anxiety.svg'; ?>
        <p class="hosi_txt font_size_6">
          DEPRESIÓN<br>ANSIEDAD
        </p>
      </div>
    </div>
  </section>

  <section class="col_2_block">
    <h3 class="block_title font_size_3"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_titulo', true); ?></h3>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_1', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_2', true); ?></p>
    </div>
    <div class="col_2_block_col">
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_3', true); ?></p>
      <p class="block_txt font_size_5"><?php echo get_post_meta(get_the_ID(), 'B_segunda_descripcion_texto_4', true); ?></p>
    </div>
  </section>

  <section class="separanda">
    <h4 class="separanda_title font_size_3">¿Que incluye el programa?</h4>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/distance_training.svg'; ?>
      <p class="separanda_text font_size_4">5 sesiones por<br>video-llamada</p>
    </div>
    <div class="separanda_item alt separanda_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/meditate.svg'; ?>
      <p class="separanda_text font_size_4">Material<br>didáctico</p>
    </div>
    <div class="separanda_item alt separanda_plus separanda_hidden_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/screen_people.svg'; ?>
      <p class="separanda_text font_size_4">Video<br>y audio</p>
    </div>
    <div class="separanda_item alt separanda_plus">
      <?php include get_template_directory().'/assets/plus.svg'; ?>
    </div>
    <div class="separanda_item">
      <?php include get_template_directory().'/assets/screen_tools.svg'; ?>
      <p class="separanda_text font_size_4">Bibliografía
      </p>
    </div>
  </section>

        <section class="copa">
          <img class="copa_img" src="https://picsum.photos/400" alt="">
          <div class="copa_interaction_container">
            <h5 class="copa_title">Retiro en Cantabria 3 días<br><?php the_title(); ?></h5>
            <p class="copa_label">FECHAS</p>

            <div class="copa_select_container">
              <select class="copa_select" name="" id="">
                <option value="">Elige una opcion</option>
              </select>
              <svg class="copa_select_arrow" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                <g id="arrow_select">
                  <path d="M0 0h24v24H0V0z" fill="white"/>
                  <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" fill="currentColor"/>
                </g>
              </svg>
            </div>

            <?php
            // $product = wc_get_product();
            if ( $product->is_type( 'variable' ) AND !$is_out_of_stock ) {
              $variations = $product->get_available_variations();

              // THIS BLOCK DEFINES THE ARRAY: "$myAttributes"
              // WE WILL USE THIS ARRAY LATER
              $myAttributes = array();
              foreach ($variations as $key => $value) {
                foreach ($value['attributes'] as $j => $var) {
                  if ( ! array_key_exists ( $j, $myAttributes ) ) {
                    $myAttributes[$j] = array($var => array($value['variation_id']));
                  } else {
                    $myAttributes[$j][$var][] = $value['variation_id'];
                  }
                }
              }
              // var_dump($myAttributes);

              $first = true;
              foreach ($myAttributes as $key => $value) {
                $slug = preg_replace("/attribute_/i", "", $key);
                $name = ucfirst($slug);
                ?>

                <div class="SelectBox copa_select" tabindex="1" id="selectBox<?php echo $name; ?>">
                  <div class="selectBoxButton" onclick="altClassFromSelector('focus', '#selectBox<?php echo $slug; ?>')">
                    <!-- <p class="selectBoxPlaceholder"><?php // _e('elige una opcion', 'lt_domain'); ?></p> -->
                    <p class="selectBoxPlaceholder"><?php echo $name; ?></p>
                    <p class="selectBoxCurrent" id="selectBoxCurrent<?php echo $name; ?>"></p>
                  </div>
                  <div class="selectBoxList">
                    <label for="nul<?php echo $name; ?>" class="selectBoxOption">
                      <input
                      class="selectBoxInput"
                      id="nul<?php echo $name; ?>"
                      type="radio"
                      data-ids=""
                      name="filter_<?php echo $slug; ?>"
                      onclick="selectBoxControler('','#selectBox<?php echo $name; ?>','#selectBoxCurrent<?php echo $name; ?>')"
                      value="0"
                      checked
                      >
                      <!-- <span class="checkmark"></span> -->
                      <p class="colrOptP"></p>
                    </label>
                    <?php foreach ($value as $i => $var) { ?>
                      <!-- <p class="colrOptP"><?php // var_dump($var['attributes']); ?></p> -->
                      <?php // foreach ($value['options'] as $key => $var) { ?>
                        <label for="<?php echo $i; ?>" class="selectBoxOption<?php if(!$first){echo ' hidden';} ?>">
                          <input
                          class="selectBoxInput"
                          id="<?php echo $i; ?>"
                          data-ids="<?php
                          foreach ($var as $j => $x) {
                            echo $x;
                            if($j<count($var)-1){ echo ', '; }
                          }
                          ?>"
                          type="radio"
                          name="filter_<?php echo $slug; ?>"
                          onclick="selectBoxControler('<?php echo $i; ?>', '#selectBox<?php echo $name; ?>', '#selectBoxCurrent<?php echo $name; ?>')"
                          value="<?php echo $i; ?>"
                          <?php // if($_GET['filter_'.$term->slug]==$var->slug){echo "selected";} ?>
                          >
                          <!-- <span class="checkmark"></span> -->
                          <!-- <p class="colrOptP"><?php // var_dump($var[0]); ?></p> -->
                          <p class="colrOptP"><?php echo $i; ?></p>
                        </label>
                      <?php } ?>
                    </div>
                  </div>
                  <?php $first = false; ?>
                <?php } ?>
              <?php } ?>



              <p class="copa_price font_size_5" id="singleSidePrice"><?php echo $product->get_price_html(); ?></p>

              <div class="cuantos Cuantos">
                <button class="cuantosBtn cuantosMins">-</button>
                <input class="cuantosQnt cuantosQantity" type="text" value="1" min="1">
                <button class="cuantosBtn cuantosPlus">+</button>
              </div>

              <button
              class="btn"
              id="myAddToCart"
              data-product-id="<?php echo get_the_id(); ?>"
              data-product-type="<?php echo $product->get_type(); ?>"
              data-quantity="1"
              data-variation-description=""
              data-buy="later">
              Añadir a la cesta
            </button>

            <p class="copa_mas">Más información <a class="copa_mas_link" href="#">CLICA AQUÍ</a></p>
          </div>
        </section>

      <?php } ?>
        <section class="col_4_block">
          <h4 class="block_title font_size_3">Puede interesarte</h4>
          <?php
          $posts = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 4
          )
        );
        ?>
        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

          <?php sqare_card(); ?>

        <?php endwhile; wp_reset_query(); ?>

        <a  class="block_link font_size_7" href="<?php echo get_site_url() ?>/blog">VER MÁS NOTICIAS</a>
      </section>



      <?php get_footer(); ?>
