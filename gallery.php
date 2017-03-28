<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 13:25
 * Template Name: Галерея
 */
?>
<?php get_header('custom'); ?>


<main>
    <main>
        <div class="category_heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="up white">Работы <span class="up base_font">(Студенты)</span></h4>
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
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery_list">
                            <div class="gallery_item">
                                <div class="item_thumb line_hover">
                                    <button class="add_btn"></button>
                                    <div class="thumb_overlay"></div>
                                    <span class="separate_line_hover left"></span>
                                    <span  class="separate_line_hover right"></span>
                                    <span class="separate_line_hover top"></span>
                                    <span class="separate_line_hover bottom"></span>
                                </div>
                            </div>
                            <div class="gallery_item">
                                <div class="item_thumb line_hover">
                                    <img src="<?=get_template_directory_uri();?>/assets/images/gallery_example.png" class="img-responsive" />
                                    <div class="thumb_overlay"></div>
                                    <span class="separate_line_hover left"></span>
                                    <span  class="separate_line_hover right"></span>
                                    <span class="separate_line_hover top"></span>
                                    <span class="separate_line_hover bottom"></span>
                                </div>
                                <div class="item_text">
                                    <p class="black name name">Имя Фамилия</p>
                                    <p class="black project_name">Название работы</p>
                                    <div class="like_box">
                                <span class="black">
                                    0
                                    <span class="like_icon">
                                <i class="like_sprite like_sprite-like_icon"></i>
                                    </span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_item">
                                <div class="item_thumb">
                                    <img src="<?=get_template_directory_uri();?>/assets/images/gallery_example.png" class="img-responsive" />
                                </div>
                                <div class="item_text">
                                    <p class="black name">Имя Фамилия</p>
                                    <p class="black">Название работы</p>
                                    <div class="like_box">
                                        <span class="black">0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery_item">
                                <div class="item_thumb">
                                    <img src="<?=get_template_directory_uri();?>/assets/images/gallery_example.png" class="img-responsive" />
                                </div>
                                <div class="item_text">
                                    <p class="black name">Имя Фамилия</p>
                                    <p class="black">Название работы</p>
                                    <div class="like_box">
                                        <span class="black">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginate">
                <ul class="pagination">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#" class="pag_btn">...</a></li>
                </ul>
            </div>
        </div>
    </main>


</main>

<?php get_footer(); ?>