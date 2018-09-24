<?php
function create_post_type_config() {

    register_post_type('config',
        array(
            'labels' => array(
                'name' =>  'Configs',
                'singular_name' => 'config',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-generic',
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

add_action( 'init', 'create_post_type_config' );

function create_taxonomy_config_category() {
    register_taxonomy(
        'config_category',
        array('config'),
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
add_action('init', 'create_taxonomy_config_category');

?>