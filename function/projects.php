<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 30.03.2017
 * Time: 13:04
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 27.03.2017
 * Time: 16:38
 */

if ( ! function_exists( 'projects' ) ) {


    function projects() {

        $labels = array(
            'name'                => _x( 'Работы', 'Post Type General Name', 'projects' ),
            'singular_name'       => _x( 'Работа', 'Post Type Singular Name', 'projects' ),
            'menu_name'           => __( 'Работы', 'projects' ),
            'parent_item_colon'   => __( 'Родительский:', 'projects' ),
            'all_items'           => __( 'Все работы', 'projects' ),
            'view_item'           => __( 'Просмотреть', 'projects' ),
            'add_new_item'        => __( 'Добавить новую работу', 'projects' ),
            'add_new'             => __( 'Добавить новую', 'projects' ),
            'edit_item'           => __( 'Редактировать', 'projects' ),
            'update_item'         => __( 'Обновить', 'projects' ),
            'search_items'        => __( 'Найти', 'projects' ),
            'not_found'           => __( 'Не найдено', 'projects' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'projects' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'taxonomies'          => array( 'projects_tax' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-category',
        );
        register_post_type( 'projects', $args );

    }

    add_action( 'init', 'projects', 0 ); // инициализируем

}


if ( ! function_exists( 'projects_tax' ) ) {

// Опишем требуемый функционал
    function projects_tax() {

        $labels = array(
            'name'                       => _x( 'Категории работ', 'Taxonomy General Name', 'projects' ),
            'singular_name'              => _x( 'Категория работы', 'Taxonomy Singular Name', 'projects' ),
            'menu_name'                  => __( 'Категории', 'projects' ),
            'all_items'                  => __( 'Категории', 'projects' ),
            'parent_item'                => __( 'Родительская категория работы', 'projects' ),
            'parent_item_colon'          => __( 'Родительская категория Книги:', 'projects' ),
            'new_item_name'              => __( 'Новая категория', 'projects' ),
            'add_new_item'               => __( 'Добавить новую категорию', 'projects' ),
            'edit_item'                  => __( 'Редактировать категорию', 'projects' ),
            'update_item'                => __( 'Обновить категорию', 'projects' ),
            'search_items'               => __( 'Найти', 'projects' ),
            'add_or_remove_items'        => __( 'Добавить или удалить категорию', 'projects' ),
            'choose_from_most_used'      => __( 'Поиск среди популярных', 'projects' ),
            'not_found'                  => __( 'Не найдено', 'projects' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
        );
        register_taxonomy( 'projects_tax', array( 'projects' ), $args );

    }

    add_action( 'init', 'projects_tax', 0 ); // инициализируем

}