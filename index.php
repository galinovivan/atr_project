<?php get_header(); ?>
<main>
    <div class="registration_modal modal fade" id="contactModal">
        <div class="modal-dialog modal-xs">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-hidden="true">
                        <span></span><span></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login auth_form">
                        <div class="text text-center">
                            <p class="black">Спасибо, ваше письмо успешно отправлено!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="participation_banner light_background">
        <div class="container-fluid">
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-7 about wrapper fluid_wrapper">
                    <div class="banner_heading with_separate">
                        <h2 class="up black">Условия участия</h2>
                    </div>
                    <div class="text">
                        <p class="black">В конкурсе могут принимать участие студенты, бакалавры, магистры,
                            аспиранты, учащиеся и выпускники 2011-2017 гг. высших учебных заведений РФ,
                            а также средних профессиональных образовательных учреждений старше 16 лет.
                            Как индивидуальные авторы, так и творческие коллективы до 3 человек.</p>
                    </div>
                    <div class="more_text">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="<?=get_template_directory_uri()?>/assets/images/pencil_icon.png" class="img-responsive" />
                            </div>
                            <div class="col-md-11 text_right">
                                <span class="small_text black">Студенты и выпускники соревнуются в разных категориях.
В каждой из трёх номинаций для студентов присуждается три призовых места.
В каждой из трёх номинаций для выпускников присуждается по одному призовому месту.</span>
                            </div>
                        </div>
                    </div>
                    <div class="button_more">
                        <a href="<?=get_page_link(469);?>" target="_blank" class="black button base medium ">Смотреть</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 thumb_wrapper">
                    <div class="thumb">
                       <h2 class="up white text-center">Условия участия</h2>
                        <div class="bottom_separate_line"></div>
                    </div>
                </div>
                <div class="col-xs-12 visible-xs visible-sm about_wrapper text-center">
                    <div class="text">
                        <p class="black">В конкурсе могут принимать участие студенты, бакалавры, магистры,
                            аспиранты, учащиеся и выпускники 2011-2017 гг. высших учебных заведений РФ,
                            а также средних профессиональных образовательных учреждений старше 16 лет.
                            Как индивидуальные авторы, так и творческие коллективы до 3 человек.</p>
                    </div>
                    <div class="more_text">
                        <div class="row">
                            <div class="col-xs-12 col-md-1">
                                <img src="<?=get_template_directory_uri()?>/assets/images/pencil_icon.png"
                                     class="img-responsive" />
                            </div>
                            <div class="col-md-11 text_right">
                                <span class="black">Студенты и выпускники соревнуются в разных категориях.
В каждой из трёх номинаций для студентов присуждается три призовых места.
В каждой из трёх номинаций для выпускников присуждается по одному призовому месту.</span>
                            </div>
                        </div>
                    </div>
                    <div class="button_more">
                        <a href="<?=get_page_link(469);?>" target="_blank" class="black button base medium ">Смотреть</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nominations_banner base_background">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 banner_heading">
                    <h2 class="up white text-center">Номинации</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4 wrapper">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_light block_center"></i>
                        </div>
                        <div class="title text-center"><h3 class="white">Интерьер квартиры</h3>
                            <span class="separate hidden-xs hidden-sm"></span>
                        </div>
                        <div class="text text-center hidden-xs hidden-sm">
                            <p class="white">Лучшее предложение
                                по дизайну интерьера типовой
                                квартиры ГК «ЦДС»</p>
                        </div>
                        <div class="watch_button hidden-xs hidden-sm">
                            <button class="button base medium white block_center"><a href="<?=get_page_link(115);?>" target="_blank"> Смотреть</a></button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 wrapper text-center">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_build block_center"></i>
                        </div>
                        <div class="title text-center">
                            <h3 class="white">Павильон/беседка</h3>
                            <span class="separate hidden-xs hidden-sm"></span>
                        </div>
                        <div class="text text-center hidden-xs hidden-sm">
                            <p class="white">
                                Лучшее предложение по дизайну
                                общественного пространства – павильона
                                или беседки в микрорайоне
                            </p>
                        </div>
                        <div class="watch_button hidden-xs hidden-sm">
                            <button class="button base medium white block_center"><a href="<?=get_page_link(165);?>" target="_blank">Смотреть</a></button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 wrapper text-right">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_state block_center"></i>
                        </div>
                        <div class="title text-center">
                            <h3 class="white">Остановка транспорта</h3>
                            <span class="separate hidden-xs hidden-sm"></span>
                        </div>
                        <div class="text text-center hidden-xs hidden-sm">
                            <p class="white">Лучшее предложение
                                по дизайну остановки общественного
                                транспорта</p>
                        </div>
                        <div class="watch_button hidden-xs hidden-sm">
                            <button class="button base medium white block_center"><a href="<?=get_page_link(168);?>" target="_blank"> Смотреть</a></button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
                <div class="col-xs-6 visible-xs visible-sm wrapper text-center">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_build block_center"></i>
                        </div>
                        <div class="title text-center">
                            <h3 class="white">Город на воде</h3>
                            <span class="separate hidden-xs hidden-sm"></span>
                        </div>
                        <div class="text text-center hidden-xs hidden-sm">
                            <p class="white">
                                Лучшее предложение по дизайну
                                общественного пространства – павильона
                                или беседки в микрорайоне
                            </p>
                        </div>
                        <div class="watch_button hidden-xs hidden-sm">
                            <button class="button base medium white block_center"><a href="<?=get_page_link(165);?>" target="_blank">Смотреть</a></button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="prize_banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 hidden-xs hidden-sm about_prize fluid_wrapper">
                    <div class="banner_heading with_separate">
                        <h2 class="up black">Призы</h2>
                    </div>
                    <div class="text">
                        <p class="black">Главный приз конкурса —
                            стажировка в одной из крупнейших
                            строительных компаний
                            Санкт&nbsp;&mdash;&nbsp;Петербурга ГК «ЦДС».
                            Финалисты конкурса также получат
                            3d-принтеры, графические
                            планшеты и другие ценные
                            и полезные призы.</p>
                    </div>
                    <div class="button_more">
                        <a class="button base medium black" href="<?=get_page_link(171);?>">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-8 col-md-7 thumb_block">
                    <h2 class="up white text-center visible-xs visible-sm">Призы</h2>
                    <div class="bottom_separate_line visible-xs visible-sm"></div>
                </div>
                <div class="col-xs-12 visible-xs visible-sm about_prize fluid_wrapper">
                    <div class="text text-center">
                        <p class="black">Главный приз конкурса —
                            стажировка в одной из крупнейших
                            строительных компаний
                            Санкт&nbsp;&mdash;&nbsp;Петербурга ГК «ЦДС».
                            Финалисты конкурса также получат
                            3d-принтеры, графические
                            планшеты и другие ценные
                            и полезные призы.</p>
                    </div>
                    <div class="button_more">
                        <a class="button base medium black" href="<?=get_page_link(171);?>">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hidden-xs hidden-sm judge_banner base_background">
        <div class="container">
            <div class="row">
                <div class="banner_heading">
                    <h2 class="white up text-center">Жюри</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="judge_slider">
                        <div class="center-slider" id="centerSlider">
                            <?php $loop = new WP_Query(array('post_type' => 'judge', 'orderby' => 'menu_order', 'order' => 'asc'));
                            if ($loop->have_posts()): ?>
                            <?php while($loop->have_posts()): $loop->the_post();?>
                                    <?php
                                    $thumbId = get_post_thumbnail_id();
                                    $thumbURL = wp_get_attachment_image_src($thumbId, 'small', true);
                                    $thumbURL = $thumbURL[0];
                                    ?>

                            <div>
                                <a href="<?=get_page_link(40);?>" target="_blank">
                                <div class="person_avatar">
                                  <img src="<?=$thumbURL?>" class="img-responsive" />
                                </div>
                                <div class="person_desc text-center">
                                    <p class="small_text white name"><?php the_title(); ?></p>
                                    <p class="small_text white desc"><?php the_excerpt(); ?></p>
                                </div>
                                    </a>
                            </div>
                            <?php endwhile;
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how_win_banner mobile_base_background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_heading">
                        <h2 class="up black text-center">Как победить</h2>
                    </div>
                </div>
            </div>
            <div class="row item_list">
                <div class="col-xs-6 col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_tabl hidden-xs hidden-sm"></i>
                            <i class="mobile_win mobile_win-mobile_win_tabl visible-xs visible-sm"></i>

                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Выбрать <br class="visible-xs visible-sm" />
                                одну из трёх
                                номинаций</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_cloud hidden-xs hidden-sm"></i>
                            <i class="mobile_win mobile_win-mobile_win_cloud visible-xs visible-sm"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Скачать шаблон
                                для выполнения
                                работы</p>
                        </div>
                        <span class="small_arrow hidden-xs hidden-sm"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_cloud_output hidden-xs hidden-sm"></i>
                            <i class="mobile_win mobile_win-mibile_win_cloud_output visible-xs visible-sm"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Загрузить <br class="visible-xs visible-sm" />
                                свою работу
                                на сайт</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_prize hidden-xs hidden-sm"></i>
                            <i class="mobile_win mobile_win-mobile_win_prize visible-xs visible-sm"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Дождаться обьявления результатов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="registration_banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 info_block hidden-xs hidden-sm">
                    <div class="base_color_background">
                        <?php if (!is_user_logged_in()): ?>
                        <div class="fluid_wrapper">
                            <div class="banner_heading with_separate">
                                <h2 class="up white">участвовать</h2>
                            </div>
                            <div class="text">
                                <p class="white">Прежде чем загрузить работу, мы просим вас заполнить
                                    краткую форму регистрации. После её заполнения вы сможете принять участие в конкурсе,
                                    а мы сможем вас найти когда придёт время вручения призов.</p>
                            </div>
                            <div class="registration_button">
                                <button class="button base medium white revert_hover"
                                        data-toggle="modal" data-target="#registrationModal">Регистрация</button>
                            </div>
                        </div>
    <?php else: ?>
                            <div class="fluid_wrapper">
                                <div class="banner_heading with_separate">
                                    <h2 class="up white">Отправить работу</h2>
                                </div>
                                <div class="text">
                                    <p class="white">Здесь вы можете отправить выполненную
                                        работу в конкурсную базу &laquo;АРХпроекта&raquo;. Советуем
                                         еще раз ознакомиться с правилами оформления
                                        проектов в разделе &laquo;Номинации&raquo; и желаем удачи!</p>
                                </div>
                                <div class="registration_button">
                                    <a class="button base medium white revert_hover"
                                            data-toggle="modal" href="<?=get_page_link(68);?>">Отправить работу</a>
                                </div>
                            </div>
    <?php endif; ?>
                    </div>
                </div>
                <?php if (!is_user_logged_in()): ?>
                <div class="col-md-5 thumb_block">
                    <h2 class="up white text-center visible-xs visible-sm">Участвовать</h2>
                    <div class="bottom_separate_line visible-xs visible-sm"></div>
                </div>
    <?php else: ?>
                    <div class="col-md-5 thumb_block is_logged">
                        <h2 class="up white text-center visible-xs visible-sm">Участвовать</h2>
                        <div class="bottom_separate_line visible-xs visible-sm"></div>
                    </div>
    <?php endif; ?>
                <div class="col-xs-12 visible-xs visible-sm info_block">
                <div class="base_color_background">
                    <?php if (!is_user_logged_in()): ?>
                        <div class="fluid_wrapper">
                            <div class="text text-center">
                                <p class="white">Прежде чем загрузить работу, мы просим вас заполнить
                                    краткую форму регистрации. После её заполнения вы сможете принять участие в конкурсе,
                                    а мы сможем вас найти когда придёт время вручения призов.</p>
                            </div>
                            <div class="registration_button">
                                <button class="button base medium white revert_hover"
                                        data-toggle="modal" data-target="#registrationModal">Регистрация</button>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="fluid_wrapper">
                            <div class="text text-center">
                                <p class="white">Здесь вы можете отправить выполненную
                                    работу в конкурсную базу &laquo;АРХпроекта&raquo;. Советуем
                                    еще раз ознакомиться с правилами оформления
                                    проектов в разделе &laquo;Номинации&raquo; и желаем удачи!</p>
                            </div>
                            <div class="registration_button">
                                <a class="button base medium white revert_hover"
                                   data-toggle="modal" href="<?=get_page_link(68);?>">Отправить работу</a>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact_form_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-1">
                    <div class="banner_heading text-center">
                        <h2 class="up black">Остались вопросы?</h2>
                        <span class="separate_line black hidden-xs hidden-sm"></span>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="text text-center">
                        <p class="black">Мы готовы ответить на все интересующие вас вопросы,
                            связанные с конкурсом «АРХпроект». Просто напишите нам.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="contact_form">
<!--                    <form action=""-->
<!--                          class="base_form" id="contactForm" method="post">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6 field_item text-left">-->
<!--                                <input id="name" type="text" placeholder="Имя" name="first_name" required />-->
<!--                                <input type="hidden" name="action" value="contact_form" />-->
<!--                            </div>-->
<!--                            <div class="col-md-6 field_item text-right">-->
<!--                                <input id="email" type="email" placeholder="email" name="email" required />-->
<!--                            </div>-->
<!--                            <div class="col-md-12 field_item textarea">-->
<!--                            <textarea name="message" id="message" cols="30" rows="5"-->
<!--                                      placeholder="Текст сообщения" required></textarea>-->
<!--                            </div>-->
<!--                            <div class="col-md-12 submit_field">-->
<!--                                <button class="button base black medium block_center" type="submit">Отправить</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
                    <?= do_shortcode('[contact-form-7 id="431" title="Контактная форма на главной"]'); ?>
            </div>
            </div>
        </div>
    </div>



</main>


<?php get_footer();?>