<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 26.03.17
 * Time: 4:08
 */

if ( ! function_exists( 'red_book_tax' ) ) {

// Опишем требуемый функционал
    function red_book_tax() {

        $labels = array(
            'name'                       => _x( 'Категории Красной книги', 'Taxonomy General Name', 'red_book' ),
            'singular_name'              => _x( 'Категория Красной книги', 'Taxonomy Singular Name', 'red_book' ),
            'menu_name'                  => __( 'Категории', 'red_book' ),
            'all_items'                  => __( 'Категории', 'red_book' ),
            'parent_item'                => __( 'Родительская категория Книги', 'sectionBanners' ),
            'parent_item_colon'          => __( 'Родительская категория Книги:', 'sectionBanners' ),
            'new_item_name'              => __( 'Новая категория', 'red_book' ),
            'add_new_item'               => __( 'Добавить новую категорию', 'sectionBanners' ),
            'edit_item'                  => __( 'Редактировать категорию', 'sectionBanners' ),
            'update_item'                => __( 'Обновить категорию', 'sectionBanners' ),
            'search_items'               => __( 'Найти', 'sectionBanners' ),
            'add_or_remove_items'        => __( 'Добавить или удалить категорию', 'sectionBanners' ),
            'choose_from_most_used'      => __( 'Поиск среди популярных', 'sectionBanners' ),
            'not_found'                  => __( 'Не найдено', 'sectionBanners' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
        );
        register_taxonomy( 'red_book_tax', array( 'sectionBanner' ), $args );

    }

    add_action( 'init', 'red_book_tax', 0 ); // инициализируем

}