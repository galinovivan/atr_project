<?php
/**
 * @package Arh_project
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main_nav" id="mainNav">
    <a class="nav_close" href="#">
        <span></span><span></span>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-3 left_separate">
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'one',
                        'container' => 'ul',
                        'menu_class' => 'nav'

                ));
                ?>
            </div>
            <div class="col-md-3 left_separate">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'two',
                    'container' => 'ul',
                    'menu_class' => 'nav'

                ));
                ?>
            </div>
            <div class="col-md-3 left_separate">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'three',
                    'container' => 'ul',
                    'menu_class' => 'nav'

                ));
                ?>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="#" class="up white">Личный кабинет</a></li>
                    <li><a href="#" class="up white">Задать вопрос</a></li>
                    <li><a href="#" class="up white">Контакты</a></li>
                    <li>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a href="#" class="top_link">Наверх</a>
<div class="helper red" id="topHelper">
    <span>С 1 апреля до 15 сентября 2017 идёт приём работ. Загрузить работу на конкурс можно <a href="#"> здесь</a>.</span>
    <a class="helper_close" href="#">
        <span></span><span></span>
    </a>
</div>

<header class="base_background">
    <div class="container">
        <div class="row top_header_section">
            <div class="col-md-6">
                <div class="header_logo text-left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arh_logo.png" class="img-responsive" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="header_logo text-right clearfix">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds.png" class="img-responsive pull-right" />
                </div>
            </div>
        </div>
        <div class="row nav_header_section line_hover">
            <div class="toggle_button" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="col-md-12 nav_text">
                <div class="text">
                    <h3 class="text-center white">«АРХпроект» — всероссийский профессиональный студенческий конкурс
                        архитектурных и дизайнерских проектов, дающий возможность выиграть стажировку
                        в крупнейшей строительной компании Северо-Запада</h3>
                </div>
                <div class="cursor">
                    <img src="<?=get_template_directory_uri()?>/assets/images/cursor.png" class="img-responsive block_center"/>
                </div>
                <div class="button_more">
                    <button class="button base medium block_center white">Узнать больше</button>
                </div>
            </div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </div>
</header>
