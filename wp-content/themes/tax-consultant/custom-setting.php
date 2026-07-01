<?php 

function tax_consultant_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'tax-consultant-theme-settings', // Menu slug
        'tax_consultant_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'tax_consultant_add_admin_menu' );

function tax_consultant_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'tax-consultant' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'tax_consultant_settings_group' );
            do_settings_sections( 'tax-consultant-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function tax_consultant_register_settings() {
    register_setting( 'tax_consultant_settings_group', 'tax_consultant_enable_animations' );

    add_settings_section(
        'tax_consultant_settings_section',
        __( 'Animation Settings', 'tax-consultant' ),
        null,
        'tax-consultant-theme-settings'
    );

    add_settings_field(
        'tax_consultant_enable_animations',
        __( 'Enable Animations', 'tax-consultant' ),
        'tax_consultant_enable_animations_callback',
        'tax-consultant-theme-settings',
        'tax_consultant_settings_section'
    );
}
add_action( 'admin_init', 'tax_consultant_register_settings' );

function tax_consultant_enable_animations_callback() {
    $checked = get_option( 'tax_consultant_enable_animations', true );
    ?>
    <input type="checkbox" name="tax_consultant_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

