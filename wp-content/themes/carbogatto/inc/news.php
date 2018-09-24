<?php
function create_post_type_news() {

    register_post_type('news',
        array(
            'labels' => array(
                'name' =>  'Новости',
                'singular_name' => 'Новости',
                'add_new' => 'Добавить',
                'add_new_item' => 'Добавить',
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-rss',
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

add_action( 'init', 'create_post_type_news' );

function create_taxonomy_news_category() {
    register_taxonomy(
        'news_category',
        array('news'),
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
add_action('init', 'create_taxonomy_news_category');

?>