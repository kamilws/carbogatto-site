<?php
function create_post_type_team() {

    register_post_type('team',
        array(
            'labels' => array(
                'name' =>  'Команда',
                'singular_name' => 'team',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-image-filter',
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

add_action( 'init', 'create_post_type_team' );

function create_taxonomy_team_category() {
    register_taxonomy(
        'team_category',
        array('team'),
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
add_action('init', 'create_taxonomy_team_category');

?>