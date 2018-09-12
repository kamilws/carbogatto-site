<?php
function create_post_type_support() {

    register_post_type('support',
        array(
            'labels' => array(
                'name' =>  'Support',
                'singular_name' => 'support',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-learn-more',
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

add_action( 'init', 'create_post_type_support' );

function create_taxonomy_support_category() {
    register_taxonomy(
        'support_category',
        array('support'),
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
add_action('init', 'create_taxonomy_support_category');

?>