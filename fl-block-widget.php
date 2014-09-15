<?php
/**
 * Plugin Name: MWi Block Widget
 * Description: Block Widget
 * Version: 1.0
 * Author: MWi AB
 * Author URI: http://mwi.se
 */
define('FL_MODULE_EXAMPLES_DIR', plugin_dir_path(__FILE__));
define('FL_MODULE_EXAMPLES_URL', plugins_url('/', __FILE__));

if(class_exists('FLBuilder')) {

    function fl_load_module_block_widget() {
        require_once 'block-widget/block-widget.php';
    }

    add_action('init', 'fl_load_module_block_widget');
}
