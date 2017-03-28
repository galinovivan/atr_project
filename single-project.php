<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 28.03.2017
 * Time: 13:32
 * Template name: Проект
 */
?>

<?php get_header('custom'); ?>
<div class="category_heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="up white"><?php wp_title(''); ?></span></h4>
            </div>
        </div>
    </div>
</div>
<main class="project_page">
    <div class="category_filter">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="black bold_font">Категория участников</span>
                            <span class="dropdown_caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a href="#">Студенты</a></li>
                            <li><a href="#">Выпускники</a></li>
                            <li><a href="#">Финалисты`16</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="black bold_font">Категория участников</span>
                            <span class="dropdown_caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a href="#">Студенты</a></li>
                            <li><a href="#">Выпускники</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="black bold_font">Категория участников</span>
                            <span class="dropdown_caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a href="#">Студенты</a></li>
                            <li><a href="#">Выпускники</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumb">
                        <img src="<?=get_template_directory_uri()?>/assets/images/project_scr.jpg" class="img-responsive" />
                    </div>
                    <div class="project_desc">
                        <div class="person_name">
                            <p class="black">Имя Фамилия</p>
                        </div>
                        <div class="project_name">
                            <p class="black">Название работы</p>
                        </div>
                        <div class="like_box">
                                <span class="black">
                                    0
                                    <span class="like_icon">
                                <i class="like_sprite like_sprite-like_icon"></i>
                                    </span></span>
                        </div>
                        <div class="person_info">
                            <p class="black"><strong>Место учёбы: </strong>Спб</p>
                            <p class="black"><strong>Специальность: </strong>Спб</p>
                            <p class="black"><strong>Год выпуска: </strong>Спб</p>
                            <p class="black"><strong>Руководитель: </strong>Спб</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="about_project">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="text_heading">
                   <h5 class="black">Описание проекта:</h5>
                       </div>
                   <div class="text">
                       <p class="black">Одному моему знакомому очень не нравилась сказка «Курочка ряба».
                           Он не понимал ее. Поступки героев этой сказки казались ему дикими выходками.Рассуждал он примерно так.
                           «Жили себе дед да баба. Была у них курочка ряба» – это нормально: деды и бабы
                           действительно живут на свете, и у них обычно водится какая-нибудь живность. «Снесла курочка яичко – яичко не простое, а золотое» – что же, предположим. Примем это как допущение… А вот дальше… Дальше начинаются совершенно не мотивированные действия героев. Посудите сами: «Дед бил, бил – не разбил». Зачем, спрашивается, он это яичко бил, если понял, что оно золотое? Золотые яйца не бьются – каждому ясно. «Баба била, била – не разбила» – экая глупая баба! Мало ей, что яйцо золотое, так ее и печальный пример деда ни в чем не убедил… Идем дальше: «Мышка бежала, хвостиком махнула – яичко упало и разбилось». Как же оно, интересно, разбилось, когда золотые яйца (см. выше) не бьются? Ладно, примем это как второе допущение. Но что ж потом? А потом – «Плачет дед». С чего бы это? Ведь за минуту до разбиения яйца мышью сам он стремился к тому же результату! Очень непоследовательный получается дед… Или этот дед настолько мелочен, что ему важно, кто именно разбил яйцо? Непонятно. «Плачет баба» – опять же глупая баба! Механически повторяет все, что делает дед. «А курочка кудахчет: «Не плачь, дед…» – Стоп! Если курочка ряба умеет говорить, то почему же раньше она молча следила за бессмысленными поступками деда и бабы, почему не возмутилась, не объяснила ситуации? Подозрительная курица… Так вот, она говорит: «Не плачь, дед, не плачь, баба, снесу я вам яичко другое – не золотое, а простое!» Тоже мне, утешение: плакали-то они о золотом!.. И вообще – будь яичко с самого начала простым, никакой трагедии не произошло бы: дед благополучно разбил бы его с первого раза без посторонней помощи. И даже баба бы разбила. Но на этом сказка кончается. Что ж это за сказка такая?</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <div class="back_button">
        <button class="button base medium black block_center">Вернуться в галерею</button>
    </div>
</main>


<?php get_footer(); ?>
