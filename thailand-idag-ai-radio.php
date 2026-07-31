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


/**
 * Startmeddelande vid aktivering
 */
function tair_activate_plugin() {

    add_option(
        'tair_version',
        '0.1.0'
    );

}

register_activation_hook(
    __FILE__,
    'tair_activate_plugin'
);


/**
 * Administrationsmeny
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
            Version 0.1.0 är installerad.
        </p>

        <p>
            Nästa steg är att koppla pluginet till Thailand-idag nyheter.
        </p>

    </div>

    <?php

}
