<?php
include_once('core/dxd_init.php');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
if (!current_user_can('administrator')):
    show_admin_bar(false);
endif;
add_theme_support('post-thumbnails');

register_nav_menus(array(
    'nav_header' => 'Навигация',
));


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);// имя
    //unset($fields['billing']['billing_last_name']);// фамилия
    unset($fields['billing']['billing_company']); // компания
    //unset($fields['billing']['billing_address_1']);//
    //unset($fields['billing']['billing_address_2']);//
    //unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_country']);
    //unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['account']['account_username']);
    //unset($fields['account']['account_password']);
    //unset($fields['account']['account_password-2']);


    unset($fields['billing']['billing_company']);// компания
    //unset($fields['billing']['billing_postcode']);// индекс
    return $fields;
}

function is_product_in_cart() {
    foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
        $cart_product = $values['data'];

        if( get_the_ID() == $cart_product->id ) {
            return true;
        }
    }

    return false;
}

