<?php
/*
Template Name: Контакты
*/

get_header();

global $redux;
?>
</div>
<section id="contact" class="contact">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="mb-5">
                Контактная информация
            </h2>
            <div class="col-md-6 text-black">
                <h3 class="text-black mb-3">ООО "ИнВятКом"</h3>
                <div class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work-hour.svg">
                    <div class="ms-3">
                        <strong class="d-block">График работы:</strong>
                        <p class="mb-0">
                            <strong>Пн-Пт: </strong><?php echo $redux["weekday"]; ?> / <strong>Сб-Вс: </strong><?php echo $redux["weekend"]; ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center my-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marker.svg">
                    <div class="ms-3">
                        <strong class="d-block">Отдел заказов</strong>
                        <p class="mb-0">
                            <?php echo $redux["index"]; ?>, г.<?php echo $redux["city"]; ?>, ул. <?php echo $redux["street"]; ?>, <?php echo $redux["room"]; ?>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center my-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg">
                    <a href="tel:<?php echo $redux["tel"]; ?>" class="ms-3 mb-0 text-black fw-bold">
                        <?php echo $redux["tel"]; ?>
                    </a>
                </div>
                <div class="social-link d-flex">
                    <a href="<?php echo $redux["whatsapp"]; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="WhatsApp">
                    </a>
                    <a href="<?php echo $redux["vk"]; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="vk">
                    </a>
                    <a href="mailto:<?php echo $redux["email"]; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="Почта">
                    </a>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <div class="contact-form m-auto">
                    <h4 class="text-black text-uppercase text-center">
                        Связаться с нами
                    </h4>
                    <?php echo do_shortcode('[contact-form-7 id="ce6e208" title="Получить консультацию"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="map" class="map pb-0">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A830a1ddd4db9817a9f3a489474ae0dbc203de4c05b09711bc69734e041629c28&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>
</section>
<?php
get_footer();
?>