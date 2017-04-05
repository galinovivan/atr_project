<?php
/**
* @package Arh_project
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/fav.ico" type="image/ico">

    <?php wp_head(); ?>
</head>
<body class="light_background">
<div id="pagePreloader" class="preloader">
    <div class="spinner">
        <img src="<?=get_template_directory_uri();?>/assets/images/preloader.gif" />
    </div>
</div>
<div class="main_nav" id="mainNav">
    <a class="nav_close" href="#">
        <span></span><span></span>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(29);?>" class="up white">О конкурсе</a></li>
                    <li><a href="<?=get_page_link(175);?>" class="up white">Новости</a></li>
                    <li><a href="<?=get_page_link(40)?>" class="up white">Жюри</a></li>
                    <li><a href="<?=get_page_link(56)?>" class="up white">Партнеры</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li class="sub_menu"><span class="sub sub_padd">Номинации</span>
                        <ul class="sub_nav">
                            <li><a href="<?=get_page_link(115);?>" target="_blank">Интерьер квартиры</a></li>
                            <li><a href="<?=get_page_link(165);?>" target="_blank">Павильон/беседка</a></li>
                            <li><a href="<?=get_page_link(168);?>" target="_blank">Остановка транспорта</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=get_page_link(171);?>" class="up white">Призы</a></li>
                    <li><a href="http://arhproekt.pro/wp-content/themes/arh_project/Uslovia.zip" class="up white">Условия участия</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(26)?>" class="up white">Работы<span class="base_font"> (Студенты)</span></a></li>
                    <li><a href="<?=get_page_link(26);?>" class="up white">Работы<span class="base_font"> (Выпускники)</span></a></li>
                    <li><a href="#" class="up white">Финалисты 2016</a></li>
                    <li><a href="<?=get_page_link(68);?>" class="up white gold_marker">Участвовать</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(177);?>" class="up white">Личный кабинет</a></li>
                    <li><a href="#" class="up white">Задать вопрос</a></li>
                    <li><a href="#" class="up white">Контакты</a></li>
                    <li>
                        <div class="social_block">
                            <ul>
                                <li><a href="https://www.facebook.com/pro.zvezdaudachi/" target="_blank">
                                        <i class="social_icon social_icon-fb_icon"></i>
                                    </a></li>
                                <li><a href="https://vk.com/pro.zvezdaudachi" target="_blank"></a>
                                    <i class="social_icon social_icon-vk_icon"></i></li>
                                <li><a href="http://instagram.com/pro.zvezdaudachi" target="_blank">
                                        <i class="social_icon social_icon-inst"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a href="#" class="top_link">Наверх</a>
<div class="helper red">
    <span>С 1 апреля до 15 сентября 2017 идёт приём работ. Загрузить работу на конкурс можно <a href="#"> здесь</a>.</span>
    <a class="helper_close" href="#">
        <span></span><span></span>
    </a>
</div>
<header class="light_header">
    <div class="container">
        <div class="row">
            <div class="toggle_container">
                <div class="toggle_button base_color_toggle" id="navToggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header_logo clearfix">
                    <a href="/">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arh_logo.png" class="img-responsive pull-left" />
                        </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cds_heder_logo clearfix">
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds_color.png"
                         class="img-responsive pull-right" title="Учредитель и организатор конкурса"
                         data-toggle="tooltip" data-placement="bottom"/>
                        </a>
                </div>
            </div>
        </div>
    </div>
</header>
