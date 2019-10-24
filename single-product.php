<?php
get_header(); ?>
    <main>
        <div class="empty-block"></div>
		
        <?php while ( have_posts() ) : the_post(); ?><?php endwhile; // end of the loop. ?>
        <div class="product-item box">
            <h2 class="title-h2 js-product-title"><?php the_title(); ?></h2>

			<?php	
			
			$cat = get_the_category($post->ID);

			// ID категории
			echo $cat->cat_ID
			?>
			
            <div class="product-item-layout grid-three">

                <div class="product-item-box">
                    <div class="product-item-images">
                        <div class="product-item-images-alpha">
                            <img class="js-cover-product" src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="product-item-images-boxes">
                            <div class="product-item-img">
                                <div class="gallery-product">
                                    <?php do_action( 'woocommerce_product_thumbnails' ); ?>
                                </div>
<!--                                <div class="img-cover js-img-cover active">-->
<!--                                    <img src="--><?php // echo get_template_directory_uri() ?><!--/assets/build/images/demo/r2.png">-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="product-item-cools">
                        <?php
                        $icon_product1 = get_field('icon_product1');
                        $icon_product2 = get_field('icon_product2');
                        $icon_product3 = get_field('icon_product3');
                        $icon_product4 = get_field('icon_product4');
                        $icon_product5 = get_field('icon_product5');

                        if( !empty($icon_product1) ): ?>
                        <div class="product-item-cools-icon">
                            <img src="<?php echo $icon_product1 ?>">
                        </div>
                        <?php endif; ?>
                        <?php if( !empty($icon_product2) ): ?>
                        <div class="product-item-cools-icon">
                            <img src="<?php echo $icon_product2 ?>">
                        </div>
                        <?php endif; ?>
                        <?php if( !empty($icon_product3) ): ?>
                        <div class="product-item-cools-icon">
                            <img src="<?php echo $icon_product3 ?>">
                        </div>
                        <?php endif; ?>
                         <?php if( !empty($icon_product4) ): ?>
                        <div class="product-item-cools-icon">
                            <img src="<?php echo $icon_product4 ?>">
                        </div>
                        <?php endif; ?>
                        <?php if( !empty($icon_product5) ): ?>
                        <div class="product-item-cools-icon">
                            <img src="<?php echo $icon_product5 ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="product-item-box">
                    <div class="tabs-all">
                        <div class="tabs-all_lists">
                            <div class="tab active">
                                Характеристики
                            </div>
                            <div class="tab">
                                Описание
                            </div>
                        </div>

                        <div class="tabContent">
                            <div class="product-item-box-content">
                                <?php global $product;
                                echo $product->list_attributes(); ?>
                            </div>
                        </div>
                        <div class="tabContent">
                            <div class="product-item-box-content">
                                <div class="product-info not-border" style="display: block;">
                                    <p> <?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="product-item-download">
                        <div class="product-item-download-block">
                            <a href="<?php the_field( "instruction_link" ); ?>" class="download" target="_blank">Скачать инструкцию
                                <span><label id="fileSize">10 Mb</label>, PDF</span></a>
                        </div>
                    </div>
                </div>

                <div class="product-item-box">
                    <div class="product-item-form">
                        <div class="product-form">
                            <div class="product-form-head">
                                <a href="#runmodal" class="product-form-head_item open-popup-run">
                                    <div class="pr-title">Доставка</div>
                                    <div class="pr-icon">?</div>
                                </a>
                                <a href="#paymodal" class="product-form-head_item open-popup-pay">
                                    <div class="pr-title">Оплата </div>
                                    <div class="pr-icon">?</div>
                                </a>
                            </div>
                            <div class="product-form-price-old">
								<?php if($product->is_on_sale()):  ?>
							  	<?php echo $product->regular_price; ?> руб.
								<?php endif; ?>
                            </div>
                            <div class="product-form-info">
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Стоимость</div>
                                    <div class="product-form-info_item">
                                        <span class="js-current-price"><?php echo $product->get_price();  ?></span>
                                        руб.</div>
                                </div>
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Количество</div>
                                    <div class="product-form-info_item">
                                        <div class="product-count">
                                            <div class="product-count-btn" data-count="min"></div>
                                            <div class="product-count-view">
                                                <input type="text" name="count-product" value="1" class="js-count-product">
                                            </div>
                                            <div class="product-count-btn" data-count="max"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Сумма заказа</div>
                                    <div class="product-form-info_item">
                                        <span class="js-total-sum"><?php echo $product->get_price();  ?></span>
                                        руб.</div>
                                </div>
                                <div class="info-text">Дорого?</div>
                                <form method="post" class="u-form">
                                   <div class="u-controls">
                                        <input type="text" class="u-input js-order-fio" name="fio" placeholder="Ф.И.О. контактного лица">
                                        <div class="is-error">Введите ф.и.о</div>
                                    </div>
                                    <div class="u-controls">
                                        <input type="text" class="u-input js-order-tel" name="phone" placeholder="Телефон">
                                        <div class="is-error">Введите телефон</div>
                                    </div>
                                    <div class="u-controls">
                                        <input type="text" class="u-input js-order-msg" name="сщььуте" placeholder="Комментарий">
                                    </div>
                                    <div class="u-form-btn">
                                        <button class="u-btn u-btn-white js-order" type="submit" disabled>
                                            Оформить заказ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="product-item-msg">
                            Наш менеджер свяжется с вами в течение 15 минут для оформления заказа
                        </div>
                        <div class="form-order-msg">Заявка отправлена</div>
                        <button class="js-yandex-order" onclick="yaCounter55570948.reachGoal('ujOrder'); return true;" style="display: none"></button>

                    </div>
                </div>

                <div class="block-mobile">
                    <div class="product-head">
                        <a href="#runmodal" class="product-head_item open-popup-run">
                            <div class="pr-title">Доставка</div>
                            <div class="pr-icon">?</div>
                        </a>
                        <a href="#paymodal" class="product-head_item open-popup-pay">
                            <div class="pr-title">Оплата </div>
                            <div class="pr-icon">?</div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <?php echo do_shortcode( '[viewBuyButtonCustom  id=' . $post->ID . ' name=' . $product->get_name() . ' count="" price=""]' ); ?>
        <div class="product-preview full-list box mobile-hidden">
            <h2 class="title-h2">С этим товаром покупают</h2>
            <div class="product-preview-layout grid-three">
			<?php 
			global $post;
			$terms = get_the_terms( $post->ID, 'product_cat' );
			$loop = new WP_Query( array( 
				'product_cat' => $terms[0]->name,
			  'post_type' => 'product', 
			  'posts_per_page' => 5,
			  'post__not_in' => array($post->ID),
			  'order' => 'ASC',
			  )); 

			  while ( $loop->have_posts() ): $loop->the_post(); ?>
				<div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price"><?php echo $product->get_price();  ?> руб.</div>
                            <div class="product-box-desc_content">
                                <div class="product-box-desc_content_box">
                                    <p><?php  the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			  <?php endwhile; ?>
<?php wp_reset_query(); ?>
            </div>
        </div>


        <div class="functional functional-small">
            <div class="functional-layout box">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное управление</h2>
                    <div class="functional-tabs full-tabs">
                        <ul class="tabs">
                            <li class="active js-change-bg" rel="tab1">Мобильное приложение</li>
                            <li rel="tab2" class="tab_last js-change-bg">Яндекс.Станция</li>
                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content" style="display: block;">
                                <div class="functional-lists grid-two">
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
											<?php	$icons_mob = get_field('icons_mob');

                       							 if( !empty($icons_mob) ): ?>
                      
												<img src="<?php echo $icons_mob ?>">
                        						<?php endif; ?>
                                                
												
                                                <span><?php the_field( "title_mom" ); ?></span>
                                            </div>
                                            <?php the_field( "content_mob" ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="functional-app">
                                    <div class="functional-app-layout">
                                        <a href="https://apps.apple.com/ru/app/sapfir/id1442949662">
                                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/apple-market.png">
                                        </a>
                                        <a href="https://play.google.com/store/apps/details?id=ru.mysmartflat.sapfir">
                                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/google_market.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content" style="display: none;">
                                <div class="functional-lists grid-two">
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <?php	$icons_yandex = get_field('icons_yandex');

                       							 if( !empty($icons_yandex) ): ?>
                      
												<img src="<?php echo $icons_yandex; ?>">
                        						<?php endif; ?>
                                                 <span><?php the_field( "title_yandex" ); ?></span>
                                            </div>
                                            <?php the_field( "content_yandex" ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
				<div class="functional-cover js-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
                <div class="functional-cover position-two js-cover-two fade">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/ban_cover_bg.svg">
                </div>
				<style>
					.functional-cover.fade {
						display: none;
					}
				</style>
            </div>
        </div>

        <?php get_template_part( 'components/partnerForm'); ?>
        <div id="runmodal" class="white-popup mfp-hide">
            <div class="modal-layout">
                <div class="modal-head">
                    <div class="modal-icon">
                        <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_run.png">
                    </div>
                    <div class="modal-title">
                        Доставка
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-body-desc">
                        <div class="text-bold">
                            Доставка товара осуществляется курьерской службой по всем регионам РФ.
                        </div>
                     <!--   Доставка до пункта выдачи - 190 руб. <br> -->
                        Стоимость доставки — 390 руб. <br>
                        Срок доставки 3-5 дней.

                     <!--   <div class="modal-list">
                            Список <a href="#" class="modal-link">пунктов выдачи.</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="paymodal" class="white-popup mfp-hide">
            <div class="modal-layout">
                <div class="modal-head">
                    <div class="modal-icon">
                        <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_pay.png">
                    </div>
                    <div class="modal-title">
                        Оплата заказа
                    </div>
                </div>
                <div class="modal-body">
                    <div class="modal-body-desc">
                        <span class="text-bold">
                            Оплата заказа
                        </span>
                         осуществляется при
                        получении в пункте выдачи или напрямую курьеру.
                        <div class="modal-list">
                            Также, мы можем выставить для вас счет для безналичной оплаты.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>