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
    register_setting( 'omr-settings-group', 'location_v' );
    register_setting( 'omr-settings-group', 'phone_v' );
    register_setting( 'omr-settings-group', 'time_works_v' );
    register_setting( 'omr-settings-group', 'email_v' );
    register_setting( 'omr-settings-group', 'vk_v' );
    register_setting( 'omr-settings-group', 'vk_link_v' );
    register_setting( 'omr-settings-group', 'number_soc_v' );
    register_setting( 'omr-settings-group', 'rec_v' );
    register_setting( 'omr-settings-group', 'soc_vk_v' );
    register_setting( 'omr-settings-group', 'soc_instagram_v' );
    register_setting( 'omr-settings-group', 'soc_behance_v' );
    register_setting( 'omr-settings-group', 'messenger_telegram' );
    register_setting( 'omr-settings-group', 'messenger_whatsapp' );
    register_setting( 'omr-settings-group', 'messenger_viber' );
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
                    <th scope="row"><label for="location_v">Адресс:</label></th>
                    <td><input name="location_v" type="text" id="location_v" value="<?php echo get_option('location_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="phone_v">Номер телефона:</label></th>
                    <td><input name="phone_v" type="text" id="phone_v" value="<?php echo get_option('phone_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="time_works_v">Режим работы:</label></th>
                    <td><input name="time_works_v" type="text" id="time_works_v" value="<?php echo get_option('time_works_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="email_v">Почта:</label></th>
                    <td><input name="email_v" type="text" id="email_v" value="<?php echo get_option('email_v'); ?>" class="regular-text"></td>
                </tr>
                <hr>
                <tr>
                    <th scope="row"><label for="vk_v">Вконтакте:</label></th>
                    <td><input name="vk_v" type="text" id="vk_v" placeholder="Имя и Фамилия" value="<?php echo get_option('vk_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="vk_link_v">Ссылка вконтакте:</label></th>
                    <td><input name="vk_link_v" type="text" id="vk_link_v" value="<?php echo get_option('vk_link_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="number_soc_v">Viber, Whatsapp, Telegram:</label></th>
                    <td><input name="number_soc_v" type="text" id="number_soc_v" value="<?php echo get_option('number_soc_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="rec_v">Ссылка на реквизиты:</label></th>
                    <td><input name="rec_v" type="text" id="rec_v" value="<?php echo get_option('rec_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="soc_vk_v">Ссылка на vk:</label></th>
                    <td><input name="soc_vk_v" type="text" id="soc_vk_v" value="<?php echo get_option('soc_vk_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="soc_instagram_v">Ссылка на instagram:</label></th>
                    <td><input name="soc_instagram_v" type="text" id="soc_instagram_v" value="<?php echo get_option('soc_instagram_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="soc_behance_v">Ссылка на behance:</label></th>
                    <td><input name="soc_behance_v" type="text" id="soc_behance_v" value="<?php echo get_option('soc_behance_v'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="messenger_telegram">Ссылка на Telegram:</label></th>
                    <td><input name="messenger_telegram" type="text" id="messenger_telegram" value="<?php echo get_option('messenger_telegram'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="messenger_whatsapp">Ссылка на Whatsapp:</label></th>
                    <td><input name="messenger_whatsapp" type="text" id="messenger_whatsapp" value="<?php echo get_option('messenger_whatsapp'); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="messenger_viber">Ссылка на Viber:</label></th>
                    <td><input name="messenger_viber" type="text" id="messenger_viber" value="<?php echo get_option('messenger_viber'); ?>" class="regular-text"></td>
                </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
            </p>
        </form>
    </div>
<?php } ?>