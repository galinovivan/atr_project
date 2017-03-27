<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.03.2017
 * Time: 14:14
 * Template name: О конкурсе
 */
?>

<?php get_header('custom'); ?>

<main class="about_page">
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about_text">
                   <?php if (have_posts()):
                   while(have_posts()):
                       the_post(); ?>
                       <p class="black"><?=get_the_content();?></p>
                    <?php
                    endwhile;
                   endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
<div class="shedule">
    <div class="date_row">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="date bottom_separate orange">
                    <span class="black">1.04.17</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="date">
                    <span class="black bold_font">15.09.17</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="date">
                    <span class="black">25.09.17</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="date">
                    <span class="black">10.17</span>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="fluid_separate">
    </div>

    <div class="action_row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left_separate black">
                    <div class="action">
                        <p class="black">
                            Старт<br />
                            приема<br />
                            работ<br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 left_separate black">
                    <div class="action">
                        <p class="black bold_font">
                            Окончание<br />
                            приема<br />
                            работ<br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 left_separate black">
                    <div class="action">
                        <p class="black">
                            Обьявление<br />
                            имен<br />
                            победителей<br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 left_separate black">
                    <div class="action small_padding">
                        <p class="black">
                            Выставка<br />
                            работ<br />
                            финалистов<br />
                            и награждение<br />
                            победителей<br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    




</main>

<?php get_footer(); ?>
