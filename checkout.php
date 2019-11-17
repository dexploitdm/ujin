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
                <?php
                global $wp;
                $order_id  = apply_filters( 'woocommerce_thankyou_order_id', absint( $wp->query_vars['order-received'] ) );
                $order_key = apply_filters( 'woocommerce_thankyou_order_key', empty( $_GET['key'] ) ? '' : wc_clean( $_GET['key'] ) );
                if ( $order_id > 0 ) {
                    $order = wc_get_order( $order_id );
                    if ( $order->get_order_key() != $order_key ) {
                        $order = false;
                    }
                }
//                if ( isset ( $order ) ) {
//                    echo $order->get_formatted_order_total();
//                    echo $order->get_payment_method_title();
//                }
                ?>
                <div class="check-end-info">
                    <div class="check-block">
                        <div class="check-block-item">Номер заказа: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item js-success-number">0</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Дата доставки: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item js-success-date">18.11.2019</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Сумма заказа: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item">
                            <?php  if ( isset ( $order ) ) {
                                echo $order->get_formatted_order_total();
                            } ?>
                            руб.</div>
                    </div>
                    <div class="check-block">
                        <div class="check-block-item">Способ оплаты: </div>
                        <div class="check-block-item"></div>
                        <div class="check-block-item js-success-methods">
                            <?php  if ( isset ( $order ) ) {
                                echo $order->get_payment_method_title();
                            } ?>
                        </div>
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
                                <input id="radio-1" name="method" type="radio"  value="cur" checked>
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



                <div id="pay-methods" class="checkout-box-title">
                    <span class="t-number">3. </span>Оплата
                </div>
                <div class="checkout-box-form">
                    <div class="checkout-pay checkout-check">
                        <div class="uj-radio">
                            <input id="radio-3" name="setpay" type="radio" value="card" checked>
                            <label for="radio-3" class="uj-radio-label">Картой онлайн</label>
                            <div class="price icon-pay"></div>
                        </div>

                        <div class="uj-radio">
                            <input id="radio-4" name="setpay" type="radio" value="nal">
                            <label  for="radio-4" class="uj-radio-label">Наличными или картой при получении</label>
                            <div class="price">

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
                            <div class="info-check-item bold js-total-checkout-all">
<!--                                --><?php //$_cartQty = count( WC()->cart->get_cart() );
//                                echo $_cartQty; ?>
                            </div>
                        </div>
                        <div class="info-check">
                            <div class="info-check-item">
                                Скидка
                            </div>
                            <div class="info-check-item"></div>
                            <div class="info-check-item">
                                <div class="opacity"><span class="js-discount-checkout">0</span> руб.</div>
                            </div>
                        </div>
                        <div class="info-check">
                            <div class="info-check-item">
                                Сумма заказа
                            </div>
                            <div class="info-check-item"></div>
                            <div class="info-check-item bold">
                                <span class="js-checkout-total-price">0</span> руб.
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

        <!-- TODO: Скрытый блок бля извлечение скидки товаров -->
        <div class="hidden-col">
            <?php
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    ?>
                    <div class="cart-product-item">
                        <div class="js-cart-price">
<!--                            --><?php //echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            <?php
                            echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                            ?>
                        </div>
                        <div class="js-cart-sale">
                            <?php echo $_product->regular_price; ?>
                        </div>
                        <div class="js-item-count-product">
                            <?php echo $cart_item['quantity'] ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="checkout-total-price"><?php wc_cart_totals_order_total_html(); ?></div>
        </div>

        <?php the_content();  ?>

    </div>
        <?php endwhile; ?>

</main>
    <script type="text/javascript">
        var widjet = new ISDEKWidjet({
            defaultCity: 'Пермь',
            cityFrom: 'Омск',
            link: 'forpvz',
            servicepath: '<?php  echo get_template_directory_uri() ?>/core/cdek/widget/scripts/service.php',
            //apikey: '2a3d5b28-22d2-4edb-a505-2ce50fb19ed2',
            hidedelt: true
            //onReady: startWidget
        });
        // function startWidget() {
        //     alert('Виджет загружен');
        // }
        widjet.binders.add(choosePVZ, 'onChoose');

        function choosePVZ(wat) {
            //console.log(wat.PVZ['Address']);
            //Скрытое поле адреса самовывоза
            $('#billing_new_fild12').val(wat.PVZ['Address']);
            $('html, body').animate({
                scrollTop: $('#pay-methods').offset().top
            }, 'slow');
        }
    </script>
<style>
    #pay-methods {
        padding-top: 70px;
        margin-top: -70px;
    }
    .woocommerce-Price-currencySymbol {
        display: none;
    }
</style>
    <script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/jquery.js"></script>
    <script src="<?php  echo get_template_directory_uri() ?>/components/checkout.js"></script>
     <script>
            // /FeMAG_choose_button
            $('#forpvz .CDEK-widget__choose widget__loading').click(function() {
                console.log('test1')
            });
        </script>
<?php get_footer(); ?>