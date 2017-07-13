<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 12.04.2017
 * Time: 13:31
 */


/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 16:38
 */

if ( ! function_exists( 'articles1' ) ) {


    function articles1() {

        $labels = array(
            'name'                => _x( 'Новости', 'Post Type General Name', 'articles1' ),
            'singular_name'       => _x( 'Новость', 'Post Type Singular Name', 'articles1' ),
            'menu_name'           => __( 'Новости', 'articles1' ),
            'parent_item_colon'   => __( 'Родительский:', 'articles1' ),
            'all_items'           => __( 'Все новости', 'articles1' ),
            'view_item'           => __( 'Просмотреть', 'articles1' ),
            'add_new_item'        => __( 'Добавить новоую новость', 'articles1' ),
            'add_new'             => __( 'Добавить новую', 'articles1' ),
            'edit_item'           => __( 'Редактировать', 'articles1' ),
            'update_item'         => __( 'Обновить', 'articles1' ),
            'search_items'        => __( 'Найти', 'articles1' ),
            'not_found'           => __( 'Не найдено', 'articles1' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'articles1' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-category',
        );
        register_post_type( 'articles1', $args );

    }

    add_action( 'init', 'articles1', 0 ); // инициализируем

}

