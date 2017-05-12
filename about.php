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
<div class="shedule hidden-xs">
    <div class="date_row">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="date bottom_separate orange" id="dateLineContainer" data-datestart="04.01.2017"
                data-dateend="09.15.2017">
                    <span class="black">1.04.17</span>
                    <div class="date_line"></div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="date">
                    <span class="black bold_font">15.09.17</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="date">
                    <span class="black">25.09.17</span>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="date">
                    <span class="black">02.10.17</span>
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
                <div class="col-md-6 col-sm-6 left_separate black">
                    <div class="action">
                        <p class="black">
                            Старт<br />
                            приема<br />
                            работ<br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 left_separate black">
                    <div class="action">
                        <p class="black bold_font">
                            Окончание<br />
                            приема<br />
                            работ<br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 left_separate black">
                    <div class="action">
                        <p class="black">
                            Обьявление<br />
                            имен<br />
                            финалистов <br />
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 left_separate black">
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
    <div class="visible-xs shedule hidden-sm hidden-md hidden-lg">
        <div class="container">
            <div class="row">
               <div class="col-xs-12 action_item active">
                   <div class="action_date">
                       <span class="black">1.04.17</span>
                   </div>
                   <div class="action_title">
                       <span class="black">
                           Старт <br />
                            приема <br />
                             работ
                           </span>
                   </div>
               </div>
                <div class="col-xs-12 action_item">
                    <div class="action_date">
                        <span class="black">15.09.17</span>
                    </div>
                    <div class="action_title">
                        <span class="black">
                            Окончание <br />
                            приема <br />
                            работ
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 action_item">
                    <div class="action_date">
                        <span class="black">
                            25.09.17
                        </span>
                    </div>
                    <div class="action_title">
                        <span class="black">
                            Обьявление <br />
                            Имен <br />
                            победителей
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 action_item">
                    <div class="action_date">
                        <span class="balck">
                            02.10.17
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 action_item">
                    <div class="action_title">
                        <span class="black">
                            Выставка <br />
                            работ <br />
                            Финалистов <br />
                            и награждение <br />
                            победителей <br />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




</main>

<?php get_footer(); ?>
