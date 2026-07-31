<?php
/**
require_once TAIR_PLUGIN_PATH . 'src/Settings/Settings.php';
require_once TAIR_PLUGIN_PATH . 'src/Admin/Menu.php';
 * Plugin Name: Thailand-idag AI Radio
 * Plugin URI: https://www.thailand-idag.asia
 * Description: Skapar automatiserade radioprogram från Thailand-idag nyheter med hjälp av AI.
 * Version: 0.1.0
 * Author: Bernt-Arne Nilsson
 * License: GPL-2.0+
 * Text Domain: thailand-ai-radio
 */

defined('ABSPATH') || exit;


define(
    'TAIR_VERSION',
    '0.1.0'
);


define(
    'TAIR_PLUGIN_PATH',
    plugin_dir_path(__FILE__)
);


/**
 * Ladda pluginfiler
 */
require_once TAIR_PLUGIN_PATH . 'src/Admin/Menu.php';


/**
 * Starta pluginet
 */
function tair_start_plugin(): void
{

    $menu = new \ThailandAI\Admin\Menu();

    $menu->register();

}


add_action(
    'plugins_loaded',
    'tair_start_plugin'
);


/**
 * Aktivering
 */
function tair_activate_plugin(): void
{

    add_option(
        'tair_version',
        TAIR_VERSION
    );

}


register_activation_hook(
    __FILE__,
    'tair_activate_plugin'
);
src/
└── Settings/
    └── Settings.php
