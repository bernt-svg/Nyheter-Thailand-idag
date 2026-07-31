<?php

namespace ThailandAI\Admin;

defined('ABSPATH') || exit;

class Menu
{

    /**
     * Registrera adminmeny
     */
    public function register(): void
    {

        add_action(
            'admin_menu',
            [
                $this,
                'add_menu'
            ]
        );

    }


    /**
     * Skapa menyer
     */
    public function add_menu(): void
    {

        add_menu_page(
            'Thailand-idag AI Radio',
            'AI Radio',
            'manage_options',
            'thailand-ai-radio',
            [
                $this,
                'dashboard'
            ],
            'dashicons-microphone',
            30
        );

    }


    /**
     * Dashboard
     */
    public function dashboard(): void
    {

        ?>

        <div class="wrap">

            <h1>
                Thailand-idag AI Radio
            </h1>

            <p>
                Administrationspanel version 0.1.0
            </p>

        </div>

        <?php

    }

}
