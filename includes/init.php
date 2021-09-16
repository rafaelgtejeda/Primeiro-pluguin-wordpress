<?php
function rt_receitas_init() {

    $labels = array(
        'name' => 'Receitas',
        'singular_name' => 'Receitas',
        'menu_name' => 'Receita',
        'name_admin_bar' => 'Receita',
        'add_new' => 'Adicionar Receita',
        'add_new_item' => 'Adicionar Receita',
        'new_item' => 'Adicionar Receita',
        'edit_item' => 'Editar Receita',
        'view_item' => 'Visualizar Receita',
        'all_items' => 'Todas as receitas',
        'search_items' => 'Procurar Receita',
        'parent_item_colon' => 'Receitas filha:',
        'not_found' => 'Nenhuma receita encontrada',
        'not_found_in_trash' => 'Nenhuma receita no lixo'
    );

    $array = array(
        'labels' => $labels,
        'description' => 'Um tipo de conteúdo para receitas',
        'public' => true,
        'publicly_queriable' => true,
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => array('slug' => 'receita'),
        'capability_type' => 'post',
        'has_arquive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
    );

    register_post_type('receita', $array);

}