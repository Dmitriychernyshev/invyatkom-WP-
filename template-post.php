<?php

/*
 * Template name: Шаблон "Наши работы"
 * Template Post Type: post
 */

get_header();

?>
</div>
<section id="post" class="post">
  <div class="container">
  <h2><?php the_title(); ?></h2>
    <div class="row mt-5">
        <div class="col-lg-6">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-lg-6 d-flex">
          <div class="description d-flex flex-column w-100">
            <div class="text-black mt-4 mt-lg-0 px-2 px-lg-0">
              <?php the_content(); ?>
            </div>
            <div class="date text-secondary text-end fw-bold mt-auto">
              <?php echo get_the_date(); ?>
            </div>
          </div>
        </div>
      </div>
      <a href="/works" class="btn fw-bold text-uppercase mt-4">
        Вернуться назад
      </a>
    </div>
</section>

<?php

get_footer();

?>