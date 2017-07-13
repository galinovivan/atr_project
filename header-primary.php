<?php
/**
 * @package Arh_project
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="viewport" content="width=1280">-->

    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/fav.ico" type="image/ico">
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-106461-5F5Ub';</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="pagePreloader" class="preloader">
    <div class="spinner">
        <img src="<?=get_template_directory_uri();?>/assets/images/preloader.gif" />
    </div>
</div>
<div class="helper red hidden-xs hidden-sm" id="topHelper">
    <?php if (!is_user_logged_in()): ?>
        <span>Приём работ открыт с 1 апреля до 15 сентября 2017. Чтобы принять участие, нажмите
        <a href="#registrationModal" data-toggle="modal"> здесь</a>.</span>
        <a class="helper_close" href="#">
            <span></span><span></span>
        </a>
    <?php else: ?>
    <span>Приём работ открыт с 1 апреля до 15 сентября 2017. Чтобы отправить выполненный проект, нажмите
        <a href="<?=get_page_link(68);?>" data-toggle="modal"> здесь</a>.</span>
    <a class="helper_close" href="#">
        <span></span><span></span>
        <?php endif; ?>
</div>
<div class="helper red visible-xs visible-sm">
    <span class="white">С 1 апреля до 15 сентября 2017 идёт приём работ.</span>
</div>

<header class="base_background primary_header_container">
    <div class="container">
        <div class="row top_header_section">
            <div class="col-xs-6 col-md-6">
                <div class="header_logo text-left">
                    <a href="/">
                        <img src="<?=get_template_directory_uri()?>/assets/images/arh_logo.png"
                             class="img-responsive hidden-xs hidden-sm" />
                        <img src="<?=get_template_directory_uri();?>/assets/images/mobile_arh_logo.png"
                             class="visible-xs visible-sm" />
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="header_logo text-right clearfix">
                    <a href="http://www.cds.spb.ru" target="_blank">
                        <i class="pull-right logo_header_icon hidden-xs hidden-sm"
                           title="Учредитель и организатор конкурса"  data-toggle="tooltip" data-placement="bottom">
                        </i>
                        <div class="mobile_block_cds visible-xs visible-sm">
                            <h5 class="white">Учредитель и организатор:</h5>
                            <img src="<?=get_template_directory_uri();?>/assets/images/mobile_cds_logo.png"
                                 class="img-responsive" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row nav_header_section line_hover header_primary">
            <div class="col-md-12 nav_text">
                <div class="text text-center">
                    <h1 class="white big_font">404</h1>
                    <h3 class="text-center white">Что то пошло не так:( попробовать еще раз</h3>
                    <div class="button_row">
                        <a href="/" class="button base medium white block_center">Сначала</a>
                    </div>
                </div>
            </div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </div>
</header>

</body>