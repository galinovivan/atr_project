<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.05.17
 * Time: 10:58
 */

function project_sort() {

    $sortType = $_POST['sort_type'] ? $_POST['sort_type'] : 'date';
    $terms = $_POST['terms'] ? $_POST['terms'] : 'students_projects';
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    if ($sortType == '_liked') {
        $args = array(
            'orderby' => 'meta_value_num',
            'meta_key' => '_liked',
            'post_type' => 'projects',
            'paged' => $paged,
            'tax_query' => array(
                'taxonomy' => 'projects_tax',
                'field' => 'slug',
                'terms' => $terms
        )
    );
    } else {
        $args = array(
            'post_type' => 'projects',
            'paged' => $paged,
            'orderby' => $sortType,
            'order' => 'DESC',
            'tax_query'=> array (
                array (
                    'taxonomy' => 'projects_tax',
                    'field' => 'slug',
                    'terms' => 'students_projects'
                )
            ) );
    }
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();

             include (get_template_directory() . '/template-parts/project.php');

        }

        wp_reset_postdata();
    } else {
        echo 'post not found :(';
    }
    die();
}


add_action('wp_ajax_myfilter', 'project_sort');
add_action('wp_ajax_nopriv_myfilter', 'project_sort');