<?php
/**
* @package Arh_project
*/
$currentLang = qtrans_getLanguage();
loadTranslate($currentLang);
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta name="viewport" content="width=1280">-->
    <title><?=lang('arh_title');?></title>
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/fav.ico" type="image/ico">
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-106461-5F5Ub';</script>
    <?php wp_head(); ?>
</head>
<body class="light_background">
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

                <?php else: ?>
                    <?php include('template-parts/registration.php') ?>

                    <?php include('template-parts/login-form.php') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include ('template-parts/nav.php'); ?>
<div class="language_selector black hidden-xs hidden-sm">
    <?php qtranxf_generateLanguageSelectCode('dropdown'); ?>
</div>
<a href="#" class="top_link"><span class="hidden-xs hidden-sm white">
        <?=lang('up');?>
    </span>
    <img src="<?=get_template_directory_uri();?>/assets/images/arrow_top_redisign.png"
         class="img-responsive top_arrow_image" />
</a>
<div class="helper_toggle orange">
    <a href="#" id="helperToggle">
        <i class="fa fa-toggle-down"></i>
    </a>
</div>
<div class="helper red hidden-xs hidden-sm" id="topHelper">
    <?php if (!is_user_logged_in()): ?>
        <span>
        <?=lang('top helper not log');?>
            <a href="#registrationModal" data-toggle="modal" id="topActionForUnloggined">
            <?=lang('here');?>
        </a>.</span>
        <a class="helper_close" href="#">
            <span></span><span></span>
        </a>
    <?php else: ?>

        <div class="row loggined_helper">
            <div class="col-md-9 col-md-offset-0 col-lg-8 col-lg-offset-1">
    <span>
        <?=lang('top helper log', true);?>
        <a href="<?=get_page_link(68);?>" data-toggle="modal">
            <?=lang('here');?>
        </a>.</span>


            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                <?php
                $user = wp_get_current_user();
                ?>
                <div class="helper_user_info">

                    <ul class="user_info_list">
                        <li class="dropdown">
                            <a id="userInfoDropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?=lang('you loggined as', true);?> <?=$user->user_lastname;?>
                            </a>
                            <span class="caret"></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=get_page_link(177);?>">
                                        <?php echo lang('personal area', true);?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=get_page_link(68);?>">
                                        <?=lang('Download the work', true);?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=wp_logout_url('/')?>">
                                        <?=lang('logout', true);?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="helper_close" href="#">
            <span></span><span></span>
        </a>
    <?php endif; ?>
</div>
<div class="helper red visible-xs visible-sm">
    <span class="white">
        <?=lang('top helper mobile');?>
    </span>
</div>
<header class="light_header">
    <div class="container">
        <div class="row">
            <div class="toggle_container">
                <div class="toggle_button base_color_toggle" id="navToggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="col-xs-4 col-md-5 col-sm-5">
                <div class="header_logo clearfix">
                    <a href="/">
                    <img src="<?php echo get_template_directory_uri() .
                        ($currentLang == 'ru' ? '/assets/images/arh_logo.png' :
                            '/assets/images/arh_logo_eng.png')?>"
                         class="img-responsive pull-left hidden-xs hidden-sm" />
                        <img src="<?php echo get_template_directory_uri() .
                            ($currentLang == 'ru' ? '/assets/images/mobile_arh_logo.png' :
                                '/assets/images/arh_mobile_en.png');?>" class="visible-xs visible-sm" />
                        </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="cds_heder_logo clearfix">
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo_cds_color.png"
                         class="img-responsive pull-right hidden-xs hidden-sm"
                         title="<?=lang('founder and organizer of counkurse');?>"
                         data-toggle="tooltip" data-placement="bottom"/>
                        <div class="mobile_block_cds visible-xs visible-sm">
                            <h5 class="black"><?=lang('founder and organizer');?>:</h5>
                            <img src="<?=get_template_directory_uri();?>/assets/images/mobile_cds_logo.png"
                                 class="img-responsive" />
                        </div>
                        </a>
                </div>
            </div>
        </div>
    </div>
</header>
