<?php
/**
 * Plugin Name: Thailand-idag AI Radio
 * Plugin URI: https://www.thailand-idag.asia
 * Description: Skapar automatiserade radioprogram från Thailand-idag nyheter med hjälp av AI.
 * Version: 0.1.0
 * Author: Bernt-Arne Nilsson
 * License: GPL-2.0+
 * Text Domain: thailand-ai-radio
 */

defined('ABSPATH') || exit;

define('TAIR_VERSION', '0.1.0');
define('TAIR_PLUGIN_PATH', plugin_dir_path(__FILE__));


/**
 * Aktivering
 */
function tair_activate_plugin() {

    add_option(
        'tair_version',
        TAIR_VERSION
    );

}

register_activation_hook(
    __FILE__,
    'tair_activate_plugin'
);


/**
 * Adminmeny
 */
function tair_admin_menu() {

    add_menu_page(
        'Thailand-idag AI Radio',
        'AI Radio',
        'manage_options',
        'thailand-ai-radio',
        'tair_dashboard',
        'dashicons-microphone',
        30
    );

}

add_action(
    'admin_menu',
    'tair_admin_menu'
);


/**
 * Dashboard
 */
function tair_dashboard() {

    ?>

    <div class="wrap">

        <h1>
            Thailand-idag AI Radio
        </h1>

        <p>
            Version <?php echo esc_html(TAIR_VERSION); ?> är installerad.
        </p>

        <hr>

        <h2>
            Status
        </h2>

        <ul>
            <li>✔ Plugin aktivt</li>
            <li>✔ WordPress-anslutning fungerar</li>
            <li>⏳ AI-modul väntar</li>
            <li>⏳ Nyhetsinsamling väntar</li>
        </ul>

    </div>

    <?php
}
Improve plugin core structure v0.1.0
