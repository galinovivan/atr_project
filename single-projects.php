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
<?php
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);                                    
                                ?>
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
<!--    <div class="category_filter">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">-->
<!--                            <span class="black bold_font">Категория участников</span>-->
<!--                            <span class="dropdown_caret"></span>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">-->
<!--                            <li><a href="#">Студенты</a></li>-->
<!--                            <li><a href="#">Выпускники</a></li>-->
<!--                            <li><a href="#">Финалисты`16</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">-->
<!--                            <span class="black bold_font">Категория участников</span>-->
<!--                            <span class="dropdown_caret"></span>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">-->
<!--                            <li><a href="#">Студенты</a></li>-->
<!--                            <li><a href="#">Выпускники</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn dropdown-toggle" type="button" id="categoryDropdown"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">-->
<!--                            <span class="black bold_font">Категория участников</span>-->
<!--                            <span class="dropdown_caret"></span>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">-->
<!--                            <li><a href="#">Студенты</a></li>-->
<!--                            <li><a href="#">Выпускники</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="project">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="thumb">
                        <img src="<?php echo $thumb_url[0]; ?>" class="img-responsive" />
                    </div>
                    <div class="project_desc">
                        <div class="person_name">
                            <p class="black"><?php wp_title(''); ?></p>
                        </div>
                        <div class="project_name">
                            <p class="black"><?php echo do_shortcode('[wpuf-meta name="project_name"]')?></p>
                        </div>
<!--                        <div class="like_box">-->
<!--                                <span class="black">-->
<!--                                    0-->
<!--                                    <span class="like_icon">-->
<!--                                <i class="like_sprite like_sprite-like_icon"></i>-->
<!--                                    </span></span>-->
<!--                        </div>-->
                        <div class="person_info">
                            <p class="black"><strong>Место учёбы: </strong><?php echo do_shortcode('[wpuf-meta name="univer"]')?></p>
                            <p class="black"><strong>Специальность: </strong><?php echo do_shortcode('[wpuf-meta name="spec"]')?></p>
                            <p class="black"><strong>Год выпуска: </strong><?php echo do_shortcode('[wpuf-meta name="year"]')?></p>
                            <p class="black"><strong>Руководитель: </strong><?php echo do_shortcode('[wpuf-meta name="team_lead"]')?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $projectDesc = do_shortcode('[wpuf-meta name="project_desc"]'); ?>
    <?php if ($projectDesc !=''|| $projectDesc != null): ?>
   <div class="about_project">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="text_heading">
                   <h5 class="black">Описание проекта:</h5>
                       </div>
                   <div class="text">
                       <p class="black"><?=$projectDesc;?></p>
                   </div>

               </div>
           </div>
       </div>
   </div>
    <?php endif; ?>
<!--    <div class="back_button">-->
<!--        <button class="button base medium black block_center" href="/галерея-работ/">Вернуться в галерею</button>-->
<!--    </div>-->
</main>


<?php get_footer(); ?>
