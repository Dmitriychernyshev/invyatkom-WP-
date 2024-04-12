<?php
/*
Template Name: Главная страница
*/

get_header();

global $redux;
?>

<section id="offer" class="offer">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 offer-content">
                <h1><?php echo $redux["h1"]; ?></h1>
                <p><?php echo $redux["h1-subtitle"]; ?></p>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn">Заказать звонок</a>
            </div>
            <div class="col-lg-6 offer-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offer-img.png" alt="ИнВятКом">
            </div>
        </div>
    </div>
</section>
</div>
<section id="partner" class="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-carousel">
                    <?php
                        $image_ids = explode(',', $redux['partners']);

                        foreach ($image_ids as $image_id) {
                    ?>
                    <div><img src="<?php echo wp_get_attachment_url($image_id) ?>"></div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="specialization" class="specialization">
    <div class="container">
        <span class="subtitle">Специализация</span>
        <hr>
        <div class="specialization__block">
            <h2>Специализация<br>компании "ИнВятКом"</h2>
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
                    <a href="#" class="specialization__item">
                        <h3>
                            Вентиляция и аспирация
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-2.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
                <div class="col-md-6 py-3">
                    <a href="#" class="specialization__item">
                        <h3>
                            Водоснабжение и водоотведение
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-3.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
                <div class="col-md-6 py-3">
                    <a href="#" class="specialization__item">
                        <h3>
                            кондиционирование
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specialization-4.png" alt="Котельные и теплоснабжение">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="integration" class="integration">
    <div class="container">
        <span class="subtitle">Интеграция</span>
        <hr>
        <div class="row">
            <h2>
                Интегрирование инженерных систем<br>по оптимальной цене
            </h2>
            <div class="integration__block mt-5">
                <p>Проектируем инженерные системы с последующим монтажом кательных, теплоснабжения, вентиляции, аспирации, кондиционирования, водоснабжения и водоотведения.</p>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contract.svg">
                        <h4 class="mt-2">
                            Более 40 дилерских контрактов и отлаженная логистика
                        </h4>
                        <p>Вы получаете оборудование точно в срок</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alternative.svg">
                        <h4 class="mt-2">
                            Алтернативные варианты европейского оборудования
                        </h4>
                        <p>Вы получаете возможность алтернативы из РФ непоставляемому оборудованию</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brigade.svg">
                        <h4 class="mt-2">
                            Слаженные бригады монтажников. Имеем допуски и разрешения
                        </h4>
                        <p>Вы получаете запланированный объект любой сложности, квалифицированно исполненный</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design.svg">
                        <h4 class="mt-2">
                            Многолетний опыт проектирования
                        </h4>
                        <p>Собственная библиотека проектов, наработаны проверенные решения</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project.svg">
                        <h4 class="mt-2">
                            Собственное проектное бюро
                        </h4>
                        <p>Наши проектировщики позволяют получить высокую согласованность действий и решений</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/supply.svg">
                        <h4 class="mt-2">
                            Многолетний опыт поставки оборудования
                        </h4>
                        <p>Выбор проверенных поставщиков в разных ценовых категориях</p>
                    </div>
                </div>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn">
                    Получить консультацию
                </a>
            </div>
        </div>
    </div>
</section>
<section class="objects" id="objects">
    <div class="container">
        <span class="subtitle">Реализованные объекты</span>
        <hr>
        <div class="row">
            <h2>
                Объекты, на которых специализируется<br>компания "ИнВятКом"
            </h2>
            <div class="row ps-lg-4 ms-md-4 mt-5 justify-content-center">
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Промышленные предприятия</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Предприятия пищевой промышленности</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Коммунальные предприятия</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Объекты теплогенерации</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Жилищное строительство</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
                <a href="#" class="object-item my-4 mx-2 mx-md-3">
                    <span>Объекты с/х назначения</span>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="processes" class="processes">
    <div class="container">
        <span class="subtitle">Процессы</span>
        <hr>
        <div class="row justify-content-center">
            <h2>
                Рабочие процессы проходят<br>в несколько этапов
            </h2>
            <div class="process__block mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap ps-4 py-3 pe-2">
                            <div class="process__item">
                                <span>01</span>
                                <p>Звоните<br>или оставляете заявку</p>
                            </div>
                            <div class="process__item">
                                <span>02</span>
                                <p>Уточняем данные<br>и подбираем оптимальное оборудование</p>
                            </div>
                            <div class="process__item">
                                <span>03</span>
                                <p>При необходимости<br>подбираем аналоги</p>
                            </div>
                            <div class="process__item">
                                <span>04</span>
                                <p>Согласовываем объемы,<br>цену и сроки</p>
                            </div>
                            <div class="process__item">
                                <span>05</span>
                                <p>Заключаем договор</p>
                            </div>
                            <div class="process__item">
                                <span>06</span>
                                <p>Осуществляем поставку<br>и осуществляем отгрузку точно в срок</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn d-flex mt-auto ms-auto text-start">
                            Получить<br>консультацию
                            <img class="ms-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/img/process.png">
</section>
<section id="reviews" class="reviews">
    <div class="container">
        <span class="subtitle">Отзывы</span>
        <hr>
        <h2>
            Отзывы клиентов
        </h2>
        <div class="reviews-slider mt-5">
            <div class="reviews-item d-flex">
                <div class="col-12 col-lg-6 reviews-content p-5 m-auto">
                    <div class="d-flex align-items-center">
                        <div class="reviews-img me-3">
                            <img src="<?php echo $redux["avatar_1"]['url']; ?>" alt="Мария Иванов">
                        </div>
                        <div class="d-flex flex-column">
                            <span>
                                <?php echo $redux["name_1"]; ?>
                            </span>
                            <p>
                                <?php echo $redux["job_1"]; ?>
                            </p>
                        </div>
                    </div>
                    <p class="mt-3 mb-5 text-black">
                        <?php echo $redux["review_1"]; ?>
                    </p>
                    <p class="text-end">
                        <?php echo $redux["date_1"]; ?>
                    </p>
                    <a href="<?php echo $redux["link_1"]; ?>" class="fw-bold">
                        Читать отзыв полностью
                    </a>
                </div>
                <div class="col-lg-6 p-5 d-none d-lg-block">
                    <img class="m-auto" src="<?php echo $redux["thank_1"]['url']; ?>" alt="Благодарность">
                </div>
            </div>
            <div class="reviews-item d-flex">
                <div class="col-12 col-lg-6 reviews-content p-5 m-auto">
                    <div class="d-flex align-items-center">
                        <div class="reviews-img me-3">
                            <img src="<?php echo $redux["avatar_2"]['url']; ?>" alt="Мария Иванов">
                        </div>
                        <div class="d-flex flex-column">
                            <span>
                                <?php echo $redux["name_2"]; ?>
                            </span>
                            <p>
                                <?php echo $redux["job_2"]; ?>
                            </p>
                        </div>
                    </div>
                    <p class="mt-3 mb-5 text-black">
                        <?php echo $redux["review_2"]; ?>
                    </p>
                    <p class="text-end">
                        <?php echo $redux["date_2"]; ?>
                    </p>
                    <a href="<?php echo $redux["link_2"]; ?>" class="fw-bold">
                        Читать отзыв полностью
                    </a>
                </div>
                <div class="col-lg-6 p-5 d-none d-lg-block">
                    <img class="m-auto" src="<?php echo $redux["thank_2"]['url']; ?>" alt="Благодарность">
                </div>
            </div>
            <div class="reviews-item d-flex">
                <div class="col-12 col-lg-6 reviews-content p-5 m-auto">
                    <div class="d-flex align-items-center">
                        <div class="reviews-img me-3">
                            <img src="<?php echo $redux["avatar_3"]['url']; ?>" alt="Мария Иванов">
                        </div>
                        <div class="d-flex flex-column">
                            <span>
                                <?php echo $redux["name_3"]; ?>
                            </span>
                            <p>
                                <?php echo $redux["job_3"]; ?>
                            </p>
                        </div>
                    </div>
                    <p class="mt-3 mb-5 text-black">
                        <?php echo $redux["review_3"]; ?>
                    </p>
                    <p class="text-end">
                        <?php echo $redux["date_3"]; ?>
                    </p>
                    <a href="<?php echo $redux["link_3"]; ?>" class="fw-bold">
                        Читать отзыв полностью
                    </a>
                </div>
                <div class="col-lg-6 p-5 d-none d-lg-block">
                    <img class="m-auto" src="<?php echo $redux["thank_3"]['url']; ?>" alt="Благодарность">
                </div>
            </div>
        </div>
        <div class="reviews-map d-flex align-items-center justify-content-center w-100">
            <a href="<?php echo $redux["2gis"]; ?>" class="d-flex flex-column align-items-center justify-content-around fw-bold">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2gis.svg" alt="Отзывы о нас на 2ГИС">
                <span>Еще отзывы</span>
            </a>
            <a href="<?php echo $redux["yandex"]; ?>" class="d-flex flex-column align-items-center justify-content-around fw-bold">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yandex.svg" alt="Отзывы о нас на Yandex">
                <span>Еще отзывы</span>
            </a>
        </div>
    </div>
</section>
<section id="map" class="map pb-0">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A830a1ddd4db9817a9f3a489474ae0dbc203de4c05b09711bc69734e041629c28&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>
</section>
<?php
get_footer();
?>