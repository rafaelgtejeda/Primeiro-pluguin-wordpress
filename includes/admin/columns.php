<?php

function rt_receita_columns() {
  
    $new_columns = array (
        'cb' => '<imput type="checkbox" />',
        'title' => 'Título',
        'count' => 'Qt. de votos',
        'average' => 'Média',
        'author' => 'Autor',
        'date' => 'Data'
    );

    return $new_columns;
}

function rt_manage_receita_columns($column, $post_id){

    $receita_data = get_post_meta($post_id, 'receita_data', true);

    if ($column == 'count') {
        echo $receita_data['contagem'];
        return;
    }
    
    if ($column == 'average') {
        echo $receita_data['media'];
        return;
    }

}