<?php
// Создать пользовательское меню
add_action('admin_menu', 'omr_create_menu');

function omr_create_menu() {

//создать новое меню верхнего уровня
    add_menu_page('Настройки темы', 'Настройки темы', 'administrator',
        __FILE__, 'omr_settings_page', get_template_directory_uri() . '/core/img/setting.png');

//вызвать функцию register settings
    add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
//регистрируем наши настройки
    register_setting( 'omr-settings-group', 'phone_v' );
    register_setting( 'omr-settings-group', 'email_v' );
    register_setting( 'omr-settings-group', 'number_soc_v' );
    register_setting( 'omr-settings-group', 'apple_app' );
    register_setting( 'omr-settings-group', 'google_app' );
}
function omr_settings_page() {
    ?>
    <div class="wrap">
        <h2>Настройки темы</h2>
        <form method="post" action="options.php">
            <?php settings_fields('omr-settings-group'); ?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row"><label for="phone_v">Номер телефона:</label></th>
                    <td><input name="phone_v" type="text" id="phone_v" value="<?php echo get_option('phone_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="email_v">Почта:</label></th>
                    <td><input name="email_v" type="text" id="email_v" value="<?php echo get_option('email_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="number_soc_v">Viber, Whatsapp, Telegram:</label></th>
                    <td><input name="number_soc_v" type="text" id="number_soc_v" value="<?php echo get_option('number_soc_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="apple_app">Ссылка на Apple App:</label></th>
                    <td><input name="apple_app" type="text" id="apple_app" value="<?php echo get_option('apple_app'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="google_app">Ссылка на Google App:</label></th>
                    <td><input name="google_app" type="text" id="google_app" value="<?php echo get_option('google_app'); ?>" class="regular-text"></td>
                </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
            </p>
        </form>
    </div>
<?php } ?>