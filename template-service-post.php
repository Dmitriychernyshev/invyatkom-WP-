<?php

/*
 * Template name: Шаблон "Услуги"
 * Template Post Type: post
 */

get_header();

?>
</div>
<section id="service-post" class="service-post">
  <div class="container">
  <h2 class="mt-5"><?php the_title(); ?></h2>
    <div class="row mt-5">
        <div class="col-12">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-12 d-flex">
          <div class="description d-flex flex-column w-100">
            <div class="text-black mt-4 px-2 px-lg-0">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-flex">
          <a href="/service" class="btn fw-bold text-uppercase mt-auto me-auto">
            Вернуться назад
          </a>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-3">
          <div class="service-form d-flex flex-column align-items-center m-auto ms-lg-auto">
              <h4 class="text-black text-uppercase text-center">
                  Заказать услугу
              </h4>
              <?php echo do_shortcode('[contact-form-7 id="5289fa1" title="Заказать услугу"]'); ?>
          </div>
        </div>
        <div class="col-lg-6 d-flex d-lg-none mt-5">
          <a href="/service" class="btn fw-bold text-uppercase mt-auto me-auto">
            Вернуться назад
          </a>
        </div>
      </div>
    </div>
</section>

<?php

get_footer();

?>