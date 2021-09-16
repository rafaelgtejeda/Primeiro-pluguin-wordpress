<?php
function rt_admin_enqueue() {
    global $typenow;

    if($typenow != 'receita') {
        return;
    }

    // Registro
    wp_register_style(
        'rt_style',
        plugins_url('/assets/css/style.css', RECEITA_PLUGUIN_URL) 
    );

    // Uso
    wp_enqueue_style('rt_style');
}