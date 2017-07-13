<?php

if ( ! function_exists( 'judge' ) ) {


function judge() {

$labels = array(
'name'                => _x( 'Члены жюри', 'Post Type General Name', 'judge' ),
'singular_name'       => _x( 'Член жюри', 'Post Type Singular Name', 'judge' ),
'menu_name'           => __( 'Члены жюри', 'judge' ),
'parent_item_colon'   => __( 'Родительский:', 'judge' ),
'all_items'           => __( 'Все члены жюри', 'judge' ),
'view_item'           => __( 'Просмотреть', 'judge' ),
'add_new_item'        => __( 'Добавить нового члена жюри', 'judge' ),
'add_new'             => __( 'Добавить новую', 'judge' ),
'edit_item'           => __( 'Редактировать', 'judge' ),
'update_item'         => __( 'Обновить', 'judge' ),
'search_items'        => __( 'Найти', 'judge' ),
'not_found'           => __( 'Не найдено', 'judge' ),
'not_found_in_trash'  => __( 'Не найдено в корзине', 'judge' ),
);
$args = array(
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
'public'              => true,
'menu_position'       => 5,
'menu_icon'           => 'dashicons-category',
);
register_post_type( 'judge', $args );

}

add_action( 'init', 'judge', 0 ); // инициализируем

}