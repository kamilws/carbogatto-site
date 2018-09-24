<?php
function create_post_type_photo() {

    register_post_type('photo',
        array(
            'labels' => array(
                'name' =>  'Галереи',
                'singular_name' => 'photo',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-images-alt2',
            'has_archive' => true,

            /*	'rewrite' => array(
            'slug' => 'faq'
            ),*/

            'capabilities' => array(),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt'

            ),

        ));
}

add_action( 'init', 'create_post_type_photo' );

function create_taxonomy_photo_category() {
    register_taxonomy(
        'photo_category',
        array('photo'),
        array(
            'labels' => array(
                'name' =>  'Категория',
                'singular_name' => 'Категория',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить'
            ),
            'hierarchical' => true,
            'show_ui' => true,
        )
    );

}
add_action('init', 'create_taxonomy_photo_category');

?>