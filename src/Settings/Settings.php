src/Settings/Settings.php
<?php

namespace ThailandAI\Settings;

defined('ABSPATH') || exit;


class Settings
{

    /**
     * Starta inställningar
     */
    public function register(): void
    {

        add_action(
            'admin_init',
            [
                $this,
                'settings_init'
            ]
        );


        add_action(
            'admin_menu',
            [
                $this,
                'add_settings_page'
            ]
        );

    }


    /**
     * Skapa sida
     */
    public function add_settings_page(): void
    {

        add_options_page(
            'Thailand-idag AI Radio',
            'AI Radio Settings',
            'manage_options',
            'thai-ai-radio-settings',
            [
                $this,
                'render'
            ]
        );

    }


    /**
     * Registrera inställningar
     */
    public function settings_init(): void
    {

        register_setting(
            'tair_settings',
            'tair_openai_key'
        );


        add_settings_section(
            'tair_section',
            'AI Inställningar',
            null,
            'thai-ai-radio-settings'
        );


        add_settings_field(
            'tair_openai_key',
            'OpenAI API Key',
            [
                $this,
                'api_key_field'
            ],
            'thai-ai-radio-settings',
            'tair_section'
        );

    }


    /**
     * API-fält
     */
    public function api_key_field(): void
    {

        $value = get_option(
            'tair_openai_key',
            ''
        );

        ?>

        <input
            type="password"
            name="tair_openai_key"
            value="<?php echo esc_attr($value); ?>"
            style="width:400px;"
        >

        <?php

    }


    /**
     * Visa sidan
     */
    public function render(): void
    {

        ?>

        <div class="wrap">

            <h1>
                Thailand-idag AI Radio Settings
            </h1>


            <form method="post" action="options.php">

                <?php

                settings_fields(
                    'tair_settings'
                );


                do_settings_sections(
                    'thai-ai-radio-settings'
                );


                submit_button();

                ?>

            </form>

        </div>

        <?php

    }

}
