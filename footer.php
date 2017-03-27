<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arh_project
 */
?>

<div class="pre_footer"></div>
<footer class="base_background">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="arh_logo">
                            <img src="<?=get_template_directory_uri()?>/assets/images/footer_logo.png" />
                        </div>
                        <div class="copyright">
                            <div class="logo">
                                <img src="<?=get_template_directory_uri()?>/assets/images/akira_logo.png"  class="img-responsive" />
                            </div>
                            <div class="text">
                            <span class="small_text">Сайт разработан
                                Рекламным агентством Киры Аллейновой</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 contact_block left_separate">
                        <div class="banner_heading">
                            <h2 class="up white">Контакты</h2>
                        </div>
                        <div class="top_text">
                            <p class="white">С нами можно связаться по телефону:
                                +7&#160;(812) 000 00 00</p>
                            <p class="white">Или написать на почту:
                                arhproekt@arhproekt.ru</p>
                        </div>
                        <div class="bottom_text">
                            <p class="white">
                                Чтобы быть в курсе новостей проекта,
                                подпишитесь на нас в соцсетях:
                            </p>
                        </div>
                        <div class="social_block">
                            <ul>
                                <li><a href="#">
                                        <i class="social_icon social_icon-fb_icon"></i>
                                    </a></li>
                                <li><a href="#"></a>
                                    <i class="social_icon social_icon-vk_icon"></i></li>
                                <li><a href="#">
                                        <i class="social_icon social_icon-inst"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 partners_block left_separate">
                <div class="banner_heading">
                    <h2 class="up white">Учредитель и организатор</h2>
                </div>
                <div class="logo">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds.png" class="img-responsive" />
                </div>
                <div class="banner_heading">
                    <h2 class="up white">Партнеры</h2>
                </div>
                <div class="partners_list">
                    <ul class="clearfix">
                        <li><a href="#">
                                <i class="partners_logo partners_logo-graphisoft"></i>
                            </a></li>
                        <li><a href="#">
                                <i class="partners_logo partners_logo-schuco"></i>
                            </a></li>
                        <li><a href="#">
                                <i class="partners_logo partners_logo-arh_time"></i>
                            </a></li>
                        <li><a href="#">
                                <i class="partners_logo partners_logo-rockwol"></i>
                            </a></li>
                    </ul>
                </div>
                <div class="banner_heading">
                    <h2 class="up white">При поддержке</h2>
                </div>
                <div class="comitets">
                    <img src="<?=get_template_directory_uri()?>/assets/images/comitatets.png" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?=get_template_directory_uri()?>/assets/js/dist/scripts.js"></script>
</body>
</html>
