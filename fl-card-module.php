<?php
/**
 * Plugin Name: MWi Card module
 * Description: Card Module
 * Version: 1.2
 * Author: MWi AB
 * Author URI: http://mwi.se
 */
define('FL_CARDMODULE_DIR', plugin_dir_path(__FILE__));
define('FL_CARDMODULE_URL', plugins_url('/', __FILE__));

if(class_exists('FLBuilder')) {

    function fl_load_module_card_module() {
        require_once 'card-module/card-module.php';
    }

    add_action('init', 'fl_load_module_card_module');
}
