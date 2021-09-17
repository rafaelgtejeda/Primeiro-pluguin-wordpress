<?php
function rt_enqueue_scripts() {
    
    // REGISTRO
    wp_register_style(
        'rt_rateit',
        plugins_url('/assets/rateit/rateit.css', RECEITA_PLUGUIN_URL) 
    );

    wp_register_script(
        'rt_rateit',
        plugins_url('/assets/rateit/jquery.rateit.min.js', RECEITA_PLUGUIN_URL),
        array('jquery'),
        '1.0',
        true
    );

    wp_register_script(
        'rt_script',
        plugins_url('/assets/js/script.js', RECEITA_PLUGUIN_URL),
        array('jquery'),
        '1.0',
        true
    );

    wp_localize_script('rt_script', 'receita_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));


    // Uso
     wp_enqueue_style('rt_rateit');
    wp_enqueue_script('rt_rateit');
    wp_enqueue_script('rt_script');

}