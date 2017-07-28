<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 13:25
 * Template Name: Галерея - финалисты
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
                        <h4 class="up white"><?=lang('works');?> <span class="up base_font white">
                                (<?=lang('finalists');?>)
                            </span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="gallery_list">
                            <?php

                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $works_students = new WP_Query( array(
                                    'post_type' => 'projects',
                                    'post_per_page' => 10,
                                    'paged' => $paged,
                                    'tax_query'=> array (
                                        array (
                                            'taxonomy' => 'projects_tax',
                                            'field' => 'slug',
                                            'terms' => 'old_projects'
                                            )
                                        ) ));
                                    ?>
                                <?php if ($works_students->have_posts() ):
                                     while ($works_students->have_posts() ) : $works_students->the_post(); ?>
                                <?php
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id, array(300, 300), false);
                                ?>
                                         <?php include (get_template_directory() . '/template-parts/project.php'); ?>


                                <?php endwhile; ?>
                                <?php endif ?>

                            <!-- paginate -->
                            <div class="col-md-12 col-xs-12">
                                <div class="paginate">
                                    <?php
                                    $category = get_category(7);
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

    </main>



<?php get_footer(); ?>