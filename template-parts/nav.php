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
                    <li><a href="<?=get_page_link(29);?>" class="up white"><?=__('[:ru]О конкурсе[:en]about');?></a></li>
                    <li><a href="<?=get_page_link(175);?>" class="up white"><?=__('[:ru]Новости[:en]news');?></a></li>
                    <li><a href="<?=get_page_link(40)?>" class="up white"><?=__('[:ru]Жюри[:en]Judge');?></a></li>
                    <li><a href="<?=get_page_link(56)?>" class="up white"><?=__('[:ru]Партнеры[:en]Partners');?></a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li class="sub_menu not_hover"><span class="sub sub_padd">
                            <?=__('[:ru]Номинации[:en]Nomination');?></span>
                        <ul class="sub_nav">
                            <li><a href="<?=get_page_link(115);?>" target="_blank">
                                    <?=__('[:ru]Интерьер квартиры[:en]Interior of apartment');?>
                                </a></li>
                            <li><a href="<?=get_page_link(165);?>" target="_blank">
<?=__('[:ru]Павильон/беседка[:en]nothing');?></a></li>
                            <li><a href="<?=get_page_link(168);?>" target="_blank">
                                    <?=__('[:ru]Остановка транспорта[:en]Bus station');?>
                                </a></li>
                            <li><a href="<?=get_page_link(525);?>" target="_blank">
                                    <?=__('[:ru]Город на воде[:en]City on the water');?>
                                </a></li>
                        </ul>
                    </li>
                    <li><a href="<?=get_page_link(171);?>" class="up white">
                            <?=__('[:ru]Призы[:en]Prizez');?>
                        </a></li>
                    <li><a href="<?=get_page_link(469);?>" class="up white">
                            <?=__('[:ru]Условия участия[:en]The terms of partication');?>
                        </a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(190)?>" class="up white">
                            <?=__('[:ru]Работы[:en]Projects');?>
                            <span class="base_font">
                                <?=__('[:ru](Студенты)[:en](Students]');?>
                            </span>
                        </a></li>
                    <li><a href="<?=get_page_link(186);?>" class="up white">
                            <?=__('[:ru]Работы[:en]Projects')?>
                            <span class="base_font">
                                <?=__('[:ru](Выпускники)[:en]Graduates');?>
                            </span></a></li>
                    <li><a href="<?=get_page_link(188);?>" class="up white">
                            <?=__('[:ru]Финалисты 2016[:en]The finalists');?>
                        </a></li>
                    <li><a href="<?php is_user_logged_in() ? print get_page_link(68) : print "#registrationModal" ?>"
                           class="up white gold_marker" data-toggle="modal">
                            <?php
                            is_user_logged_in()
                                ? print __('[:ru]Загрузить работу[:en]Download the work') :
                                print __('[:ru]Участвовать[:en]Participate'); ?>
                        </a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li>

                        <?php if (is_user_logged_in()): ?>
                            <a href="<?=get_page_link(177);?>" class="up white">
                                <?=__('[:ru]Личный кабинет[:en]profile');?>
                            </a>
                        <?php else: ?>
                            <a href="#registrationModal" data-toggle="modal" class="up white">
                                <?=('[:ru]Регистрация[:en]Registration');?>
                            </a>
                        <?php endif; ?>

                    </li>
                    <li><a href="#contactForm" class="up white scroll_link">
                            <?=__('[:ru]Задать вопрос[:en]Ask questions');?>
                        </a></li>
                    <li><a href="#contactForm" class="up white scroll_link">
                            <?=__('[:ru]Контакты[:en]Contacts');?>
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
