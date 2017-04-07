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
                        <a href="/">
                            <img src="<?=get_template_directory_uri()?>/assets/images/footer_logo.png" />
                            </a>
                        </div>
                        <div class="copyright">
                            <div class="logo">
                            <a href="http://kira-all.ru/" target="_blank">
                                <img src="<?=get_template_directory_uri()?>/assets/images/akira_logo.png"  class="img-responsive" />
                                </a>
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
                            <p class="white">С нами можно связаться по телефону:<br />
                                8(800) 250 78 40</p>
                            <p class="white">
                                pro@zvezdaudachi.com</p>
                        </div>
                        <div class="bottom_text">
                            <p class="white">
                                Чтобы быть в курсе новостей проекта,
                                подпишитесь на нас в соцсетях:
                            </p>
                        </div>
                        <div class="social_block">
                            <ul>
                                <li><a href="https://www.facebook.com/pro.zvezdaudachi/" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-fb"></i>
                                    </a></li>
                                <li><a href="https://vk.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-vk"></i>
                                </a></li>
                                <li><a href="http://instagram.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-inst"></i>
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
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds.png" class="img-responsive" />
                        </a>
                </div>
                <div class="banner_heading">
                    <h2 class="up white">Партнеры</h2>
                </div>
                <div class="partners_list">
                    <ul class="clearfix">
                        <li><a href="http://www.graphisoft.ru" target="_blank">
                                <i class="partners_logo partners_logo-graphisoft"></i>
                            </a></li>
<!--                        <li><a href="https://www.schueco.com/web2/ru" target="_blank">-->
<!--                                <i class="partners_logo partners_logo-schuco"></i>-->
<!--                            </a></li>-->
                        <li><a href="http://www.architime.ru" target="_blank">
                                <i class="partners_logo partners_logo-arh_time"></i>
                            </a></li>
                        <li><a href="http://www.rockwool.ru" target="_blank">
                                <i class="partners_logo partners_logo-rockwol"></i>
                            </a></li>
                    </ul>
                </div>
<!--                <div class="banner_heading">-->
<!--                  <h2 class="up white">При поддержке</h2>-->
<!--                </div>-->
<!--                <div class="comitets">-->
<!--                  <img src="--><?//=get_template_directory_uri()?><!--/assets/images/comitatets.png" class="img-responsive" />-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?=get_template_directory_uri()?>/assets/js/dist/scripts.js"></script>
</body>
</html>
