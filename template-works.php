<?php
/*
Template Name: Наши работы
*/

get_header();

?>
</div>
<section id="works" class="works">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h2 class="mb-5">
                Наши выполненные<br>работы
            </h2>
            <div class="row">
                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => -1,
                        'category'    => 1
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                ?>
				
        <div class="col-md-6 col-xl-4 mb-5">
            <div class="works-item d-flex flex-column">
                <div class="image">
                    <a class="text-black" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>  
                <div class="description pb-2">
                    <h3 class="mb-2 mt-3">
                        <a class="text-black" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="text-black">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="date fw-bold text-secondary text-end">
                        <?php echo get_the_date(); ?>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn mt-auto mx-auto">
                    Подробнее
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg">
                </a>
            </div>
        </div>

			<?php 
				}
			} else {
				// Постов не найдено
			}

			wp_reset_postdata(); // Сбрасываем $post
			?>
        </div>
    </div>
</section>
<?php
get_footer();
?>