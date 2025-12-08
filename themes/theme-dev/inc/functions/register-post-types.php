<?php
// https://generatewp.com

function create_post_type()
{
    register_post_type('diretoria', array(
        'labels' => array('name' => 'Diretoria', 'singular_name' => 'Diretoria', 'all_items' => 'Todos'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title')
    ));

    register_post_type('ministerio', array(
        'labels' => array('name' => 'Ministérios', 'singular_name' => 'Ministério', 'all_items' => 'Todos'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title')
    ));

    register_post_type('calendario', array(
        'labels' => array('name' => 'Calendários', 'singular_name' => 'Calendário', 'all_items' => 'Todos'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title')
    ));

    register_post_type('informativo', array(
        'labels' => array('name' => 'Informativo', 'singular_name' => 'Informativo', 'all_items' => 'Todos'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title')
    ));
}

add_action('init', 'create_post_type');

function create_taxonomy()
{
    register_taxonomy('cargo', ['diretoria'], array(
        'labels' => array(
            'name' => 'Cargos',
            'singular_name' => 'Cargo'
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
    ));
}
add_action('init', 'create_taxonomy');
