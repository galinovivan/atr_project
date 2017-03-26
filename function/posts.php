<?php
//Добавление пункта меню проекты
if ( ! function_exists( 'sectionBanner' ) ) {

// Опишем требуемый функционал
function sectionBanner() {

$labels = array(
'name'                => _x( 'Баннеры на главной', 'Post Type General Name', 'sectionBanners' ),
'singular_name'       => _x( 'Баннер', 'Post Type Singular Name', 'sectionBanners' ),
'menu_name'           => __( 'Секции на главной', 'sectionBanners' ),
'parent_item_colon'   => __( 'Родительский:', 'sectionBanners' ),
'all_items'           => __( 'Все секции', 'sectionBanners' ),
'view_item'           => __( 'Просмотреть', 'sectionBanners' ),
'add_new_item'        => __( 'Добавить новую секцию', 'sectionBanners' ),
'add_new'             => __( 'Добавить новый', 'sectionBanners' ),
'edit_item'           => __( 'Редактировать', 'sectionBanners' ),
'update_item'         => __( 'Обновить', 'sectionBanners' ),
'search_items'        => __( 'Найти', 'sectionBanners' ),
'not_found'           => __( 'Не найдено', 'sectionBanners' ),
'not_found_in_trash'  => __( 'Не найдено в корзине', 'sectionBanners' ),
);
$args = array(
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
'taxonomies'          => array( 'red_book_tax' ), // категории, которые мы создадим ниже
'public'              => true,
'menu_position'       => 5,
'menu_icon'           => 'dashicons-category',
);
register_post_type( 'sectionBanners', $args );

}

add_action( 'init', 'sectionBanner', 0 ); // инициализируем

}