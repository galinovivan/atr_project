<?php get_header(); ?>
<main>


    <div class="participation_banner light_background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 about wrapper fluid_wrapper">
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
                        <button class="button base medium black">Смотреть</button>
                    </div>
                </div>
                <div class="col-md-5 thumb_wrapper">
                    <div class="thumb">
                        <!--<img src="assets/images/people_banner-2.png"  class="img-responsive" />-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nominations_banner base_background">
        <div class="container">
            <div class="row">
                <div class="col-md-12 banner_heading">
                    <h2 class="up white text-center">Номинации</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wrapper">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_light block_center"></i>
                        </div>
                        <div class="title text-center"><h3 class="white">Интерьер квартиры</h3>
                            <span class="separate"></span>
                        </div>
                        <div class="text text-center">
                            <p class="white">Лучшее предложение
                                по дизайну интерьера типовой
                                квартиры ГКt «ЦДС»</p>
                        </div>
                        <div class="watch_button">
                            <button class="button base medium white block_center">Смотреть</button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
                <div class="col-md-4 wrapper text-center">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_build block_center"></i>
                        </div>
                        <div class="title text-center">
                            <h3 class="white">Павильон/беседка</h3>
                            <span class="separate"></span>
                        </div>
                        <div class="text text-center">
                            <p class="white">
                                Лучшее предложение по дизайну
                                общественного пространства – павильона
                                или беседки в микрорайоне
                            </p>
                        </div>
                        <div class="watch_button">
                            <button class="button base medium white block_center">Смотреть</button>
                        </div>
                        <span class="separate_line_hover left"></span>
                        <span  class="separate_line_hover right"></span>
                        <span class="separate_line_hover top"></span>
                        <span class="separate_line_hover bottom"></span>
                    </div>
                </div>
                <div class="col-md-4 wrapper text-right">
                    <div class="namination_item line_hover">
                        <div class="icon">
                            <i class="nomination_sprite nomination_sprite-icon_state block_center"></i>
                        </div>
                        <div class="title text-center">
                            <h3 class="white">Остановка транспорта</h3>
                            <span class="separate"></span>
                        </div>
                        <div class="text text-center">
                            <p>Лучшее предложение
                                по дизайну остановки общественного
                                транспорта</p>
                        </div>
                        <div class="watch_button">
                            <button class="button base medium white block_center">Смотреть</button>
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
                <div class="col-lg-4 col-md-5 about_prize fluid_wrapper">
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
                        <button class="button base medium black">Подробнее</button>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 thumb_block">
                </div>
            </div>
        </div>
    </div>


    <div class="judge_banner base_background">
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
                            <?php $loop = new WP_Query(array('post_type' => 'judge'));
                            if ($loop->have_posts()): ?>
                            <?php while($loop->have_posts()): $loop->the_post();?>
                                    <?php
                                    $thumbId = get_post_thumbnail_id();
                                    $thumbURL = wp_get_attachment_image_src($thumbId, 'small', true);
                                    $thumbURL = $thumbURL[0];
                                    ?>

                            <div>
                                <a href="<?php the_permalink();?>" target="_blank">
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

    <div class="how_win_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_heading">
                        <h2 class="up black text-center">Как победить</h2>
                    </div>
                </div>
            </div>
            <div class="row item_list">
                <div class="col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_tabl"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Выбрать
                                одну из трёх
                                номинаций</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_cloud"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Скачать шаблон
                                для выполнения
                                работы</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_cloud_output"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Загрузить
                                свою работу
                                на сайт</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_wrapper">
                        <div class="icon">
                            <i class="win_sprite win_sprite-win_prize"></i>
                        </div>
                        <div class="text text-center">
                            <p class="black bold_font">Дождаться обьявления результатов</p>
                        </div>
                        <span class="small_arrow"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="registration_banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 info_block">
                    <div class="base_color_background">
                        <div class="fluid_wrapper">
                            <div class="banner_heading with_separate">
                                <h2 class="up white">мы хотим ваших данных</h2>
                            </div>
                            <div class="text">
                                <p class="white">Для того, чтобы загрузить работу на конкурс, мы просим вас заполнить
                                    краткую форму регистрации. Мы отправим вам на почту пароль и, в дальнейшем,
                                    вы сможете отслеживать свою активность на сайте в личном кабинете.
                                    А мы сможем вас найти когда придёт время вручения призов.</p>
                            </div>
                            <div class="registration_button">
                                <button class="button base medium white revert_hover"
                                        data-toggle="modal" data-target="#registrationModal">Регистрация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 thumb_block"></div>
            </div>
        </div>
    </div>

    <div class="contact_form_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner_heading text-center">
                        <h2 class="up black">Остались вопросы?</h2>
                        <span class="separate_line black"></span>
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
                    <form action="action" class="base_form" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 field_item text-left">
                                <input id="name" type="text" placeholder="Имя" name="name" />
                            </div>
                            <div class="col-md-6 field_item text-right">
                                <input id="email" type="email" placeholder="email" name="email" />
                            </div>
                            <div class="col-md-12 field_item textarea">
                            <textarea name="message" id="message" cols="30" rows="5"
                                      placeholder="Текст сообщения"></textarea>
                            </div>
                            <div class="col-md-12 submit_field">
                                <button class="button base black medium block_center" type="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</main>


<?php get_footer();?>
