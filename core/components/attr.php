<?php

/**
 * Вывод кликабельных атрибутов в таблице на странице товара
 */

// Открываем таблицу для атрибутов
function startTableAttribute() {
    echo '<table><tbody>';
}
add_action('woocommerce_single_product_summary', 'startTableAttribute', 61);

// Функция вывода атрибута
function productShoes() {
    global $product;
// Получаем элементы таксономии атрибута shoes
    $attribute_names = get_the_terms($product->get_id(), 'pa_shoes');
    $attribute_name = "pa_shoes";
    if ($attribute_names) {
// Вывод имени атрибута shoes
        echo '<tr><td><span>' . wc_attribute_label($attribute_name) . ':</span>&nbsp;</td>';
// Выборка значения заданного атрибута
        foreach ($attribute_names as $attribute_name):
// Вывод значений атрибута shoes
            echo '<td><a href="' . get_site_url() . '/shop/?pa_shoes=' . $attribute_name->slug . '">' . $attribute_name->name . '</a></td></tr>';
        endforeach;
    }
}
// Определяем место вывода атрибута
add_action('woocommerce_single_product_summary', 'productShoes', 62);

// Закрываем таблицу для атрибутов
function endTableAttribute() {
    echo '</tbody></table>';
}
add_action('woocommerce_single_product_summary', 'endTableAttribute', 63);