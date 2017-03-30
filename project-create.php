<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 30.03.2017
 * Time: 12:00
 * Template name: Загрузка Проекта
 */
?>

<?php get_header('custom'); ?>

<main class="create_project_page">
    <div class="category_heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="up white"><?php wp_title('');?></h4>
                </div>
            </div>
        </div>
    </div>
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
    <div class="create_post_project">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="create_form">
                        <form class="base_form create_project_form" method="post" action="">
                            <div class="row">
                                <div class="col-md-12 field_item">
                                    <input type="text" name="user_name" placeholder="Имя Отчество Фамилия" required/>
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="user_city" placeholder="Ваш город" required />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="number" name="phone_number" placeholder="Номер телефона в формате +7(000)000 00 00"
                                           required />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="school_name" placeholder="Название учебного заведения полностью" required />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="user_spec" placeholder="Специальность" required />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="year" placeholder="Год выпуска" required/>
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="team_lead" placeholder="Руководитель проекта" />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="text" name="project_name" placeholder="Название работы" required />
                                </div>
                                <div class="col-md-12 field_item">
                                    <textarea name="project_desc" cols="30" rows="7" placeholder="Пояснения к работе">
                                    </textarea>
                                </div>
                                <div class="col-md-12 field_item field_files">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 submit_field">
                                    <button type="submit" class="button base medium black">Отправить</button>
                                    <input type="checkbox" id="confirmCheckbox" name="user_confirm" />
                                    <label for="confirmCheckbox">Я прочитал(а) правила и согласен с ними</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
