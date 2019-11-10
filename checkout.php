<?php
/*
Template Name: Макет Оформление зазаза
Template Post Type: page
*/
get_header(); ?>
<main class="cart">
    <div class="empty-block"></div>
    <?php while (have_posts()) : the_post(); ?>
    <div class="content box">
        <h1 class="title-h2">
            <?php the_title(); ?>
        </h1>
        <?php if(is_wc_endpoint_url()): ?>
            <div class="check-end">
                <div class="check-end-title">
                    Спасибо за ваш заказ!
                </div>
                <div class="check-end-desc">
                    Сейчас он отправлен на склад для сборки.
                </div>
                <div class="check-end-content">
                    Ожидайте смс или звонок от оператора контакт-центра по статусу заказа.
                </div>
                <div class="check-end-info">
                    <div class="check-block">
                        <div class="check-block-item">Номер заказа: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item">COXD-631121</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Дата доставки: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item">18.11.2019</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Сумма заказа: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item">17 500руб.</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Способ оплаты: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item">Оплата наличными</div>
                    </div>
                </div>
                <div class="check-end-btn">
                    <a href="<?php echo get_site_url(); ?>/catalogs" class="check-repay">Продолжить покупки</a>
                </div>
            </div>
        <?php else: ?>
        <div class="checkout">
            <div class="checkout-box">
                <div class="checkout-box-title">
                    <span class="t-number">1. </span>Ваши данные
                </div>
                <div class="checkout-box-form">
                    <div class="checkout-control">
                        <span class="place">Ваше имя и фамилия<span class="required">*</span></span>
                        <input type="text" name="fio" class="check-input js-check-fio" />
                    </div>
                    <div class="checkout-control">
                        <span class="place">Телефон<span class="required">*</span></span>
                        <input type="text" name="phone" class="check-input js-check-phone" />
                    </div>
                    <div class="checkout-control">
                        <span class="place">E-mail<span class="required">*</span></span>
                        <input type="text" name="email" class="check-input js-check-email" />
                    </div>
                </div>



                <div class="checkout-box-title">
                    <span class="t-number">2. </span>Способ получения и доставки
                </div>
                <div class="checkout-box-form">
                    <div class="checkout-method">
                        <div class="checkout-check">
                            <div class="uj-radio">
                                <input id="radio-1" name="method" type="radio" value="cur" checked>
                                <label for="radio-1" class="uj-radio-label">Доставка курьером</label>
                                <div class="price">
                                    390руб.
                                </div>
                            </div>

                            <div class="uj-radio">
                                <input id="radio-2" name="method" type="radio" value="pnz">
                                <label  for="radio-2" class="uj-radio-label">Самовывоз с пункта выдачи</label>
                                <div class="price bold">
                                    190руб.
                                </div>
                            </div>
                        </div>
                        <div class="method-content method-cur">
                            <div class="checkout-control">
                                <span class="place">Населенный пункт<span class="required">*</span></span>
                                <input type="text" name="city" class="check-input js-check-city" />
                            </div>
                            <div class="checkout-control">
                                <span class="place">Улица, дом<span class="required">*</span></span>
                                <input type="text" name="street" class="check-input js-check-street" />
                            </div>
                            <div class="checkout-control">
                                <span class="place">Квартира<span class="required">*</span></span>
                                <input type="text" name="home" class="check-input js-check-home" />
                            </div>
                        </div>
                        <div class="method-content method-pnz" style="display: none">
                            <div id="forpvz" style="height:600px;"></div>
                        </div>
                    </div>

                </div>



                <div class="checkout-box-title">
                    <span class="t-number">3. </span>Оплата
                </div>
                <div class="checkout-box-form">
                    <div class="checkout-pay checkout-check">
                        <div class="uj-radio">
                            <input id="radio-3" name="setpay" type="radio" value="cur" checked>
                            <label for="radio-3" class="uj-radio-label">Картой онлайн</label>
                            <div class="price icon-pay"></div>
                        </div>

                        <div class="uj-radio">
                            <input id="radio-4" name="setpay" type="radio" value="pnz">
                            <label  for="radio-4" class="uj-radio-label">Наличными или картой при получении</label>
                            <div class="price">
                                Бесплатно
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-info">
                    <div class="checkout-info-layout">
                        <div class="info-check">
                            <div class="info-check-item">
                                Товаров
                            </div>
                            <div class="info-check-item"></div>
                            <div class="info-check-item bold">
                                <?php $_cartQty = count( WC()->cart->get_cart() );
                                echo $_cartQty; ?>
                            </div>
                        </div>
                        <div class="info-check">
                            <div class="info-check-item">
                                Скидка
                            </div>
                            <div class="info-check-item"></div>
                            <div class="info-check-item">
                                <div class="opacity">1 500 руб.</div>
                            </div>
                        </div>
                        <div class="info-check">
                            <div class="info-check-item">
                                Сумма заказа
                            </div>
                            <div class="info-check-item"></div>
                            <div class="info-check-item bold">
                                17 500 руб.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-btn">
                    <button type="button" class="check-btn js-btn-checkout">Перейти к оплате</button>
                </div>

            </div>
        </div>
        <?php endif; ?>






            <?php
            do_action( 'woocommerce_review_order_before_cart_contents' );

            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    ?>
                    <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                        <td class="product-name">
                            <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            <?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </td>
                        <td class="product-total">
                            <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </td>

                        <?php
                        echo $_product->regular_price;
                        ?> <span> Руб.</span>
                    </tr>
                    <?php
                }
            }

            ?>



        <hr>
        <?php wc_cart_totals_order_total_html(); ?>

        <?php the_content();  ?>

    </div>
        <?php endwhile; ?>

</main>
    <script type="text/javascript">
        var widjet = new ISDEKWidjet({
            defaultCity: 'Пермь',
            cityFrom: 'Омск',
            link: 'forpvz',
            servicepath: '<?php  echo get_template_directory_uri() ?>/core/cdek/widget/scripts/service.php'
        });
    </script>
    <script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/jquery.js"></script>
    <script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/checkout.js"></script>
<?php get_footer(); ?>