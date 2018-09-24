<?php
function create_post_type_acces() {

    register_post_type('acces',
        array(
            'labels' => array(
                'name' =>  'Аксессуары',
                'singular_name' => 'Аксессуары',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-forms',
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

add_action( 'init', 'create_post_type_acces' );

function create_taxonomy_acces_category() {
    register_taxonomy(
        'acces_category',
        array('acces'),
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
add_action('init', 'create_taxonomy_acces_category');

?>