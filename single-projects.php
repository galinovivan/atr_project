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
                        <a href="<?=$thumb_url[0]; ?>" data-fancybox>
                        <img src="<?php echo $thumb_url[0]; ?>" class="img-responsive" />
                            </a>
                        <div class="thumb_overlay"></div>
                    </div>
                    <div class="project_desc">
                        <div class="person_name">
                            <p class="black"><?php wp_title(''); ?></p>
                        </div>
                        <div class="project_name">
                            <p class="black"><?php echo do_shortcode('[wpuf-meta name="project_name"]')?></p>
                        </div>
                        <div class="project_like">
                            <?php
                            if (function_exists('wp_ulike')) {
                                wp_ulike('like');
                            }
                            ?>
                        </div>
                        <div class="person_info">
                            <p class="black">
                                <strong>
                                    <?=lang('nomination');?>:
                                    <?=do_shortcode('[wpuf-meta name="nomination"]');?>
                                </strong>
                            </p>
                            <p class="black"><strong>
                                    <?=lang('place of study');?>:
                                </strong><?php echo do_shortcode('[wpuf-meta name="univer"]')?></p>
                            <p class="black"><strong>
                                    <?=lang('specialty');?>:
                                </strong><?php echo do_shortcode('[wpuf-meta name="spec"]')?></p>
                            <p class="black"><strong>
                                    <?=lang('year of issue');?>:
                                </strong><?php echo do_shortcode('[wpuf-meta name="year"]')?></p>
                            <p class="black"><strong>
                                    <?=lang('leader');?>:
                                </strong><?php echo do_shortcode('[wpuf-meta name="team_lead"]')?></p>

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
                   <h5 class="black">
                       <?=lang('project description');?>
                   </h5>
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
