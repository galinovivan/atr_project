<?php
/**
 * @package Arh_project
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/fav.ico" type="image/ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pagePreloader" class="preloader">
    <div class="spinner">
        <img src="<?=get_template_directory_uri();?>/assets/images/preloader.gif" />
    </div>
</div>
<div class="registration_modal modal fade" id="registrationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Войдите, чтобы загрузить работу</h4>
            </div>
            <div class="modal-body">
                <?php  if (is_user_logged_in()): 
                    $currentUser = wp_get_current_user();
                    ?>
                    <p><h4>Вы вошли как <?=$currentUser->user_lastname;?></h4></p>
                    <h3 class="black"><a href="<?=wp_logout_url('/');?>" class="black"> Выйти.</a></h3>
<!--                <div class="registration auth_form">-->
<!--                    <div class="form_description text-center">-->
<!--                        <p class="black">Пожалуйста, зарегистрируйтесь, чтобы иметь возможность-->
<!--                            принять участие в конкурсе.</p>-->
<!--                        <p class="black">-->
<!--                            Введите адрес электронной почты, и мы отправим-->
<!--                            вам пароль от личного кабинета.</p>-->
<!--                    </div>-->
<!--                    <div class="reg_form">-->
<!--                        <form class="base_form">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="text" name="name" placeholder="Имя Фамилия" required />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="email" name="email" placeholder="Email" required />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 checkbox_field">-->
<!--                                    <input type="checkbox" name="confirm" id="authrConfirm" required/>-->
<!--                                    <label for="authrConfirm">Я согласен на обработку своих персональных данных</label>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 submit_field">-->
<!--                                    <button type="submit" class="button base medium black">Регистрация</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
                <?php else: ?>
                <?php include('template-parts/registration.php') ?>
<!--                <div class="login auth_form">-->
<!--                    <div class="form_description text-center">-->
<!--                        <p class="black text-center">Если вы уже зарегистрировались, войдите,-->
<!--                            чтобы мы вас узнали.</p>-->
<!--                    </div>-->
<!--                    <div class="login_form">-->
<!--                        <form class="base_form">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="email" name="auth_login" placeholder="Email" />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="password" name="auth_pass" placeholder="Пароль" />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 checkbox_field">-->
<!--                                    <input type="checkbox" name="auth_remember" id="authRemember"/>-->
<!--                                    <label for="authRemember">Запомнить меня</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
                <?php include('template-parts/login-form.php') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="registration_modal modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Последний шаг</h4>
            </div>
            <div class="modal-body">
                <div class="login auth_form">
                    <div class="form_description text-center">
                        <p class="black text-center">Если вы уже зарегистрировались, войдите,
                            чтобы мы вас узнали.</p>
                    </div>
                    <div class="login_form">
                        <form class="base_form">
                            <div class="row">
                                <div class="col-md-12 field_item">
                                    <input type="email" name="auth_login" placeholder="Email" />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="password" name="auth_pass" placeholder="Пароль" />
                                </div>
                                <div class="col-md-12 checkbox_field">
                                    <input type="checkbox" name="auth_remember" id="authRemember"/>
                                    <label for="authRemember">Запомнить меня</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="registration_modal modal fade" id="infoRegistration">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Последний шаг</h4>
            </div>
            <div class="modal-body">
                <div class="login auth_form">
                    <div class="form_description text-center">
                        <p class="black text-center">Осталось самая малость</p>
                    </div>
                    <div class="text text-center">
                        <p class="black">Мы отправили пароль от личного кабинета вам на почту.
                            Пожалуйста, откройте наше письмо, чтобы подтвердить
                            регистрацию на сайте.</p>
                    </div>
                </div>
            </div>
        </div>
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
                    <li><a href="#registrationModal" data-toggle="modal" class="up white gold_marker">Участвовать</a></li>
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
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <img src="<?=get_template_directory_uri()?>/assets/images/header_cds_color.png" 
                         class="img-responsive pull-right revert_grayscale"
                         title="Учредитель и организатор конкурса"  data-toggle="tooltip" data-placement="bottom"/>
                        </a>
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
                    <a href="<?=get_page_link(29)?>" class="button base medium block_center white">Узнать больше</a>
                </div>
            </div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </div>
</header>
