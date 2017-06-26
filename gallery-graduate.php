<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 13:25
 * Template Name: Галерея - выпускники
 */
?>
<?php get_header('custom'); ?>


<main>
        <div class="category_heading">
            <a href="<?=$_SERVER['HTTP_REFERER'];?>" class="heading_back_link hidden-xs hidden-sm">
                <i class="fa fa-arrow-left"></i>
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h4 class="up white">
                            <?=lang('works', true);?>
                            <span class="up base_font"><span class="white">
                                    (<?=lang('graduates', true);?>)
                                </span></span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="category_filter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                       <div class="dropdown">
                           <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                               <span class="black bold_font">
                                   <?=lang('category of participants');?>
                               </span>
                               <span class="dropdown_caret"></span>
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                               <li><a href="/галерея-работ/студенты/">
                                       <?=lang('students');?>
                                   </a></li>
                               <li><a href="">
                                       <?=lang('graduates');?>
                                   </a></li>
                               <li><a href="/галерея-работ/финалисты-16/">
                                       <?=lang('finalists');?> `16
                                   </a></li>
                           </ul>
                       </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="black bold_font">
                                    <?=lang('nomination');?>
                                </span>
                                <span class="dropdown_caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <li>
                                    <a href="#" class="nomination_filter_button filter_field"
                                       data-filter="Интерьер квартиры" data-terms="pupil_projects">
                                        <?=lang('interior of apartament');?>
                                    </a></li>
                                <li>
                                    <a href="#" class="nomination_filter_button filter_field"
                                       data-filter="Павильон/Беседка" data-terms="pupil_projects">
                                        <?=lang('pavilion / arbor');?>
                                    </a></li>
                                <li>
                                    <a href="#" class="nomination_filter_button filter_field"
                                       data-filter="Остановка транспорта"
                                       data-terms="pupil_projects">
                                        <?=lang('bus station');?>
                                    </a></li>
                                <li>
                                    <a href="#" class="nomination_filter_button filter_field"
                                       data-filter="Город на воде" data-terms="pupil_projects">
                                        <?=lang('city on the water');?>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="categoryDropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="black bold_font"><?=lang('sort');?></span>
                                <span class="dropdown_caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <li><a href="#" data-sort="date" class="sort_field"
                                       data-terms="pupil_projects">
                                        <?=lang('by upload date');?>
                                    </a></li>
                                <li><a href="#" data-sort="_liked" class="sort_field"
                                       data-terms="pupil_projects">
                                        <?=lang('by popularity');?>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
<!--                    <div class="col-md-3">-->
<!--                        <div class="dropdown">-->
<!--                            <button class="btn dropdown-toggle" type="button" id="categoryDropdown"-->
<!--                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">-->
<!--                                <span class="black bold_font">Категория участников</span>-->
<!--                                <span class="dropdown_caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">-->
<!--                                <li><a href="/галерея-работ/студенты/">Студенты</a></li>-->
<!--                                <li><a href="">Выпускники</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="gallery_list">
                            <div class="gallery_item">
                                <div class="item_thumb line_hover">
                                    <a href="<?=get_page_link(68);?>">
                                    <button class="add_btn"></button>
                                    <div class="thumb_overlay"></div>
                                    <span class="separate_line_hover left"></span>
                                    <span  class="separate_line_hover right"></span>
                                    <span class="separate_line_hover top"></span>
                                    <span class="separate_line_hover bottom"></span>
                                        </a>
                                </div>
                            </div>
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $works_students = new WP_Query( array(
                                    'post_type' => 'projects',
                                    'paged' => $paged,
                                    'tax_query'=> array (
                                        array (
                                            'taxonomy' => 'projects_tax',
                                            'field' => 'slug',
                                            'terms' => 'pupil_projects'
                                            )
                                        ) ));
                                    ?>
                                <?php if ($works_students->have_posts() ):
                                     while ($works_students->have_posts() ) : $works_students->the_post(); ?>
                                <?php
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);                                    
                                ?>
                           <?php include (get_template_directory() . '/template-parts/project.php'); ?>

                                <?php endwhile; ?>
                                <?php endif ?>
                            <div class="col-md-12 col-xs-12">
                                <div class="paginate">
                                    <?php
                                    $category = get_category(5);
                                    $count = $category->category_count;

                                    $paginationPaged = ceil($count / 10);
                                    if ($paginationPaged < 1) $paginationPaged = 1;
                                    ?>
                                    <?php if (function_exists('wp_paginate')) {
                                        wp_paginate(array(
                                            'pages' => $paginationPaged,
                                            'page' => $paged
                                        ));
                                    }
                                    ?>

                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="paginate">-->
<!--                <ul class="pagination">-->
<!--                    <li><a href="#" class="active">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#" class="pag_btn">...</a></li>-->
<!--                </ul>-->    
<!--            </div>-->
        </div>
    </main>



<?php get_footer(); ?>