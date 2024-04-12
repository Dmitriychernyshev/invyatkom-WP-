<?php
/*
Template Name: Услуги
*/

get_header();

?>
</div>
<section id="service" class="service">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="mb-5">
                Услуги которые мы<br>предоставляем
            </h2>
            <div class="row mt-4">
                <div class="col-md-6 py-3">
                    <a href="/kotelnye-i-teplosnabzhenie" class="specialization__item">
                        <h3>
                            Котельные и теплоснабжение
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-1.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
                <div class="col-md-6 py-3">
                    <a href="/ventilyacziya-i-aspiracziya" class="specialization__item">
                        <h3>
                            Вентиляция и аспирация
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-2.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
                <div class="col-md-6 py-3">
                    <a href="/vodosnabzhenie-i-vodootvedenie" class="specialization__item">
                        <h3>
                            Водоснабжение и водоотведение
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-3.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
                <div class="col-md-6 py-3">
                    <a href="/kondiczionirovanie" class="specialization__item">
                        <h3>
                            Кондиционирование
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-4.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>