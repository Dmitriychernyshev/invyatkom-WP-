<?php
/*
Template Name: О компании
*/

get_header();

?>
</div>
<section id="about" class="about">
    <div class="container">
        <span class="subtitle">О компании</span>
        <hr>
        <div class="row">
            <h2>
                Инженерная компания<br>ИнВятКом
            </h2>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-offer.png" alt="Безопасные и комфортные инженерные системы">
            </div>
            <div class="col-lg-6 text-black mt-3 mt-lg-0">
                <?php echo $redux["about"]; ?>
            </div>
        </div>
    </div>
</section>
<section id="managers" class="managers">
    <div class="container">
        <span class="subtitle">Сотрудники</span>
        <hr>
        <div class="row">
            <h2>
                Лица компании
            </h2>
            <?php if( ! empty( $redux['employ-slides'] ) ) {
                foreach ( $redux['employ-slides'] as $val ) {
                    ?>
                    <div class="col-6 col-lg-3 text-center mt-3">
                    <img class="mb-4" src="<?php echo $val['image']; ?>" alt="<?php echo $val['title']; ?>">
                    <span class="text-black"><?php echo $val['title']; ?></span>
                    <h4 class="mt-2"><?php echo $val['url']; ?></h4>
                    </div>
                    <?php
                }
            }
            ?>
            <!-- <div class="col-6 col-lg-3 text-center mt-3">
                <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/managers.jpg" alt="Генеральный директор">
                <span class="text-black">Иван Иванов</span>
                <h4 class="mt-2">Генеральный директор</h4>
            </div>
            <div class="col-6 col-lg-3 text-center mt-3">
                <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/managers.jpg" alt="Генеральный директор">
                <span class="text-black">Иван Иванов</span>
                <h4 class="mt-2">Генеральный директор</h4>
            </div>
            <div class="col-6 col-lg-3 text-center mt-3">
                <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/managers.jpg" alt="Генеральный директор">
                <span class="text-black">Иван Иванов</span>
                <h4 class="mt-2">Генеральный директор</h4>
            </div> -->
        </div>
    </div>
</section>
<?php
get_footer();
?>