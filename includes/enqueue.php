<?php
function rt_enqueue_scripts() {

    wp_register_style(
        'rt_rateit',
        plugins_url('/assets/rateit/style.css', RECEITA_PLUGUIN_URL) 
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

    // Uso
    wp_enqueue_style('rt_rateit');
    wp_enqueue_script('rt_rateit');
    wp_enqueue_script('rt_script');

}