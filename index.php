<?php
/*
Plugin Name: Receitas
Plugin URI: https://
Description: Um pluguin simples para edição e configuração de receitas.
Author: Rafael Gimenes Tejeda
Version: 1.0.0
Author URI: https://
Text Domain: receitas
*/

if(!function_exists('add_action')){
    echo 'Opa! Eu sou só um pluguin, não posso ser chamado diretamente!';
    exit;
}

// Setup
define('RECEITA_PLUGUIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
include('includes/filter-content.php');

// Hooks
register_activation_hook(RECEITA_PLUGUIN_URL, 'rt_activate_pluguin');
add_action('init', 'rt_receitas_init');
add_action('admin_init', 'rt_receitas_admin_init');
add_action('save_post_receita', 'rt_save_post_admin', 10, 3);
add_filter('the_content', 'rt_filter_receita_content');

// Shortcodes