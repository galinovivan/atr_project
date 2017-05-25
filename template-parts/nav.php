<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 19.05.2017
 * Time: 12:00
 */
?>

<div class="main_nav" id="mainNav">
    <a class="nav_close" href="#">
        <span></span><span></span>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(29);?>" class="up white">
                            <?=lang('about');?>
                        </a></li>
                    <li><a href="<?=get_page_link(175);?>" class="up white">
                            <?=lang('news');?>
                        </a></li>
                    <li><a href="<?=get_page_link(40)?>" class="up white">
                            <?=lang('judge');?>
                        </a></li>
                    <li><a href="<?=get_page_link(56)?>" class="up white">
                            <?=lang('partners');?>
                        </a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li class="sub_menu not_hover"><span class="sub sub_padd">
                        <?=lang('nominations');?>
                        </span>
                        <ul class="sub_nav">
                            <li><a href="<?=get_page_link(115);?>" target="_blank">
                                    <?=lang('interior of apartment');?>
                                </a></li>
                            <li><a href="<?=get_page_link(165);?>" target="_blank">
<?=__('[:ru]Павильон/беседка[:en]nothing');?></a></li>
                            <li><a href="<?=get_page_link(168);?>" target="_blank">
                                    <?=lang('bus station');?>
                                </a></li>
                            <li><a href="<?=get_page_link(525);?>" target="_blank">
                                    <?=lang('city on the water');?>
                                </a></li>
                        </ul>
                    </li>
                    <li><a href="<?=get_page_link(171);?>" class="up white">
                            <?=lang('prizes');?>
                        </a></li>
                    <li><a href="<?=get_page_link(469);?>" class="up white">
                            <?=lang('the terms of partication');?>
                        </a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(190)?>" class="up white">
                           <?=lang('works');?>
                            <span class="base_font">
                                <?=lang('students');?>
                            </span>
                        </a></li>
                    <li><a href="<?=get_page_link(186);?>" class="up white">
                            <?=lang('works');?>
                            <span class="base_font">
                                <?=lang('graduates');?>
                            </span></a></li>
                    <li><a href="<?=get_page_link(188);?>" class="up white">
                           <?=lang('finalists');?>
                        </a></li>
                    <li><a href="<?php is_user_logged_in() ? print get_page_link(68) : print "#registrationModal" ?>"
                           class="up white gold_marker" data-toggle="modal">
                            <?php
                            is_user_logged_in()
                                ? print lang('download the work') :
                                print lang('participate') ?>
                        </a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li>

                        <?php if (is_user_logged_in()): ?>
                            <a href="<?=get_page_link(177);?>" class="up white">
                                <?=lang('personal area');?>
                            </a>
                        <?php else: ?>
                            <a href="#registrationModal" data-toggle="modal" class="up white">
                                <?=__('[:ru]Регистрация[:en]Registration');?>
                            </a>
                        <?php endif; ?>

                    </li>
                    <li><a href="#contactForm" class="up white scroll_link">
                           <?=lang('Ask questions');?>
                        </a></li>
                    <li><a href="#contactForm" class="up white scroll_link">
                         <?=lang('contacts');?>
                        </a></li>
                    <li>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
