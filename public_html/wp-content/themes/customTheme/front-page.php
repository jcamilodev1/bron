<?php get_header('wordpress'); ?>

<?php // ↓↓↓ Loop Example  ?>
<?php if ( have_posts() ) : the_post(); ?>
<!-- LOADER -->
<div class="loader">
  <div class="loader__container">
    <svg class="loader__content" viewBox="25 25 50 50">
      <circle class="loader__circular" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
</div>
<!-- END LOADER -->

<a class="bandera" href="https://larebajavirtual.com/catalogo/buscar?subMenuCategory=on&busqueda=bronquisol"
  target="_blank">
  <img src="http://bronquisol.mullenlowedev.com/wp-content/uploads/2021/04/Group-13.png" alt="Compra Aqui!">
</a>
<!-- G ENERAL CONTAINER -->
<div class="container container--general">

  <!-- HEADER -->

  <!-- HEADER -->


  <!-- BANNER -->
  <section class="banner" id="home">
    <div class="banner__container">
      <div class="banner__info">
        <h2 class="banner__title" data-aos="fade-up" data-aos-delay="250">
          Encuentra la tos
        </h2>
        <h3 class="banner__subtitle banner__subtitle--arrows">
          DESLiza
        </h3>
      </div>
    </div>
    <!-- PANORAMIC -->
    <section class="panoramic">
      <img src="http://bronquisol.mullenlowedev.com/wp-content/uploads/2021/04/panoramic-1-1024x576.jpg"
        usemap="#image-map" class="panoramic__img">
      <img src="http://bronquisol.mullenlowedev.com/wp-content/uploads/2021/04/panoramic-1b-1024x576.jpg" alt=""
        class="panoramic__img panoramic__img--back hide">

      <map name="image-map">
        <area target="" alt="" title="" href="#" coords="654,212,832,495" shape="rect" class="panoramic__link">
      </map>
    </section>
    <!-- END PANORAMIC -->
    <!-- CURSOR -->
    <div class="cursor">
      <img src="http://bronquisol.mullenlowedev.com/wp-content/uploads/2021/04/hand-1.png" alt="" class="cursor__icon">
    </div>
    <!-- END CURSOR -->
  </section>
  <!-- END BANNER -->
  <!-- <div class="container-all"> -->
  <!-- CONTAINER BOXES -->
  <div class="container container--boxes">
    <div class="container__wrapper">
      <div class="container__left">
        <div class="container__square">
          <h2 class="container__title">
            no le tengas miedo a la tos, <span class="dBlue"> combátela con bronquisol. </span>
          </h2>
        </div>
      </div>
      <div class="container__right">
        <div class="container__mini">
          <p class="container__mini__text">
            Expulsa las flemas
          </p>
          <span class="container__mini__divider"></span>
          <p class="container__mini__text">
            Alivia la tos
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTAINER BOXES -->

  <!-- CONTAINER PRODUCTS -->
  <div class="container container--products" id="products">
    <div class="container__wrapper">
      <div class="container__left">
        <!-- CAROUSEL -->
        <section class="swiper-container carousel carousel--products">
          <?php if( have_rows('slider', 'option') ): ?>
          <div class="swiper-wrapper carousel__wrapper">
            <?php $contadora = 1;?>
            <?php while( have_rows('slider', 'option') ): the_row(); ?>
            <article class="swiper-slide carousel__item">
              <picture class="carousel__item__picture" data-info="product<?php echo $contadora; ?>">
                <img src="<?php the_sub_field('imagen');?>" alt="" class="carousel__item__img">
              </picture>
            </article>
            <?php 	$contadora++;?>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </section>
        <!-- END CAROUSEL -->
      </div>
      <div class="container__right">
        <section class="infoBoxes">
          <?php if( have_rows('slider', 'option') ): ?>
          <?php $contador =1;?>
          <?php while( have_rows('slider', 'option') ): the_row(); ?>
          <article class="infoBox" data-info="product<?php echo $contador; ?>">
            <h3 class="infoBox__title">
              <?php the_sub_field('titulo');?>
            </h3>
            <h4 class="infoBox__subtitle">
              <?php the_sub_field('subtitulo');?>
            </h4>
            <p class="infoBox__text">
              <?php the_sub_field('descripcion');?>
            </p>
            <!-- PSEUDO TABLE -->
            <section class="pTable mt30">
              <div class="pTable__body">
                <?php if( get_sub_field('tabla')) : ?>
                <?php while( have_rows('tabla', 'option') ): the_row(); ?>
                <div class="pTable__row">
                  <div class="pTable__cell">
                    <?php the_sub_field('categoria_');?>
                  </div>
                  <div class="pTable__cell">
                    <?php the_sub_field('edades');?>
                  </div>
                  <div class="pTable__cell">
                    <?php the_sub_field('uso');?>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
              <?php endif; ?>
            </section>
            <!-- END PSEUDO TABLE -->
          </article>
          <?php 	$contador++;?>
          <?php endwhile; ?>
        </section>
        <?php endif; ?>
      </div>

    </div>
  </div>
  <div class="container container--text">
    <div class="container__wrapper">
      <p class="container__text max1000">
        <?php the_field('banner', 'option'); ?>
      </p>
    </div>
  </div>

  <!-- END CONTAINER TEXT -->

  <!-- CONTAINER MAP -->
  <div class="container container--map" id="maps">
    <div class="container__wrapper">
      <h2 class="container__title max800 ml0">
        Encuentra EL ALIVIO DE BRONQUISOL EN TU <span class="blue"> DROGUERÍA DE CONFIANZA </span>
      </h2>
      <div class="container dF">
        <div class="container__left">
          <!-- MAP -->
          <!--MAp
          <section class="map" id="map">
          
          -->
          <section class="map" id="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d127250.07596873197!2d-74.1522180242087!3d4.671386224519329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfarmatodos%20en%20bogota!5e0!3m2!1sen!2sco!4v1617923399388!5m2!1sen!2sco"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </section>
          <!-- END MAP -->
        </div>
        <div class="container__right tiendas">
          <!-- CAROUSEL -->
          <section class="swiper-container carousel carousel--columns ">
            <?php if( have_rows('tiendas', 'option') ): ?>
            <div class="swiper-wrapper">
              <!-- CAROUSEL ITEM -->
              <?php $contadora = 1;?>
              <?php while( have_rows('tiendas', 'option') ): the_row(); ?>
              <article class="swiper-slide carousel__item">
                <!-- CARD -->
                <a href="https://www.farmatodo.com.co/" class="card">
                  <div class="card__top">
                    <picture class="card__picture">
                      <img src="<?php the_sub_field('tienda-foto');?>" alt="" class="card__img">
                    </picture>
                  </div>
                  <div class="card__content">
                    <h3 class="card__title">
                      <?php the_sub_field('nombre-tienda');?>
                    </h3>
                    <p class="card__text">
                      <?php the_sub_field('direccion-tienda');?>
                    </p>
                    <p class="card__text">
                      Horario de atención: <span class="mlA"> <?php the_sub_field('hora-atencion');?></span>
                    </p>
                    <span class="card__link">
                      www.farmatodo.com.co
                    </span>
                    <span class="card__go">
                      <picture class="card__go__picture">
                        <img src="http://bronquisol.mullenlowedev.com/wp-content/uploads/2021/04/arrow-turned.png"
                          alt="" class="card__go__icon">
                      </picture>
                      <p class="card__go__text">
                        Ruta
                      </p>
                    </span>
                  </div>
                </a>
                <!-- END CARD -->
              </article>
              <?php 	$contadora++;?>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <!-- END CAROUSEL ITEM -->
            <!-- CAROUSEL ITEM -->
            <div class="swiper-pagination"></div>
          </section>
          <!-- END CAROUSEL -->
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTAINER MAP -->


  <!-- FOOTER -->

  <!-- END FOOTER -->


  <!-- </div> -->
</div>
<!-- END GENERAL CONTAINER -->

<?php endif; ?>

<?php get_footer(); ?>