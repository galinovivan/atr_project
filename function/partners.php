<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 16:38
 */

if ( ! function_exists( 'partners' ) ) {


    function partners() {

        $labels = array(
            'name'                => _x( 'Партнеры', 'Post Type General Name', 'partners' ),
            'singular_name'       => _x( 'Партнер', 'Post Type Singular Name', 'partners' ),
            'menu_name'           => __( 'Партнеры', 'Partners' ),
            'parent_item_colon'   => __( 'Родительский:', 'partners' ),
            'all_items'           => __( 'Все партнеры', 'partners' ),
            'view_item'           => __( 'Просмотреть', 'partners' ),
            'add_new_item'        => __( 'Добавить нового партнера', 'partners' ),
            'add_new'             => __( 'Добавить нового', 'partners' ),
            'edit_item'           => __( 'Редактировать', 'partners' ),
            'update_item'         => __( 'Обновить', 'partners' ),
            'search_items'        => __( 'Найти', 'partners' ),
            'not_found'           => __( 'Не найдено', 'partners' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'partners' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-category',
        );
        register_post_type( 'partners', $args );

    }

    add_action( 'init', 'partners', 0 ); // инициализируем

}