<?php
function rt_activate_pluguin() {

    if( version_compare(get_bloginfo('version'),'4.5', '<') ){
        wp_die(__('Você precisa atualizar o WordPress para usar este pluguin.', 'receitas'));
    }

}