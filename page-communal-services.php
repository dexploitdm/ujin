<?php
/*
Template Name: Макет ЖКХ
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-jkh'); ?>
        <?php while( have_posts() ) : the_post(); ?>
            <div class="boxes-desc">
                <h2 class="title-h2 box"><?php echo get_field( "title_opp" ); ?></h2>
                <div class="boxes-desc-layout">
                    <div class="boxes-desc-content box">
                        <div class="boxes-title"><?php echo get_field( "content_opp" ); ?></div>
                        <div class="boxes-mini"><?php echo get_field( "minitext_opp" ); ?></div>
                    </div>
                    <div class="boxes-desc-download">
                        <div class="boxes-desc-download-layout">
                            <div class="download-title">
                                Узнайте подробнее о наших решениях из презентации
                            </div>
                            <div class="download-link">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/download.png">
                                <div class="download-link-box">
                                    <a href="<?php echo get_field( "link_present" ); ?>" class="download-pull">Скачать презентацию</a>
                                    <span class="download-info"><span id="fileSize">15 Mb</span>, pptx</span>
                                </div>
								<script>
						var urlFile = "<?php $_SERVER['REQUEST_URI']; ?><?php the_field( "link_present" ); ?>";
var req = new XMLHttpRequest();
req.open("GET", urlFile, false);
req.send();
var resultSize = req.getResponseHeader('content-length');
							
function formatSizeUnits(bytes){
      if      (bytes>=1073741824) {bytes=(bytes/1073741824).toFixed(2)+' Gb';}
      else if (bytes>=1048576)    {bytes=(bytes/1048576).toFixed(2)+' Mb';}
      else if (bytes>=1024)       {bytes=(bytes/1024).toFixed(2)+' Kb';}
      else if (bytes>1)           {bytes=bytes+' bytes';}
      else if (bytes==1)          {bytes=bytes+' byte';}
      else                        {bytes='0 byte';}
      return bytes;
}
var nodeResultSize = document.getElementById('fileSize');
nodeResultSize.innerHTML = formatSizeUnits(resultSize);
						</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php  endwhile; ?>

        <div class="lists-services box">
            <div class="action-btn">
                <div class="action-btn-tr">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <?php $pportunities = new WP_Query(array(
                'post_type' => 'opportunities',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'checkOpp',
                        'value' => 'servicesCheck',
                        'compare' => 'LIKE'
                    )
                )
            )) ?>
            <?php if ($pportunities->have_posts() ): ?>
                <div class="swiper-container3">
                    <div class="lists-services-layout swiper-wrapper">
                        <?php while ($pportunities->have_posts()) : $pportunities->the_post(); ?>
                            <div class="lists-services-box swiper-slide">
                                <div class="services-head">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <?php the_content();  ?>
                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <div class="lists-services-text">Мы помогаем строить жилье будущего</div>

            <div class="lists-services-load block-mobile ">
                <div class="download-title">
                    Узнайте подробнее о наших решениях из презентации
                </div>
                <div class="download-link">
                    <a class="u-btn u-btn-download" type="submit">
                        Скачать презентацию
                    </a>
                    <div class="download-info">15 Mb, pptx</div>
                </div>
            </div>
        </div>
        <div class="functional functional-jkh">
            <div class="functional-layout box">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное приложение для ваших жильцов</h2>
                    <div class="functional-desc-content">
Ваши жильцы получают доступ к управлению коммунальными услугами через приложение, что делает ваше взаимодействие еще более удобным.

                    </div>
                    <div class="functional-lists grid-two">
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_automatisation.svg">
                                    <span>Автоматизированная система управления <br> и учета</span>
                                </div>
                                <ul>
                                    <li>Учет и мониторинг тепло-и энергопотребления</li>
                                    <li>Вызов диспетчерских служб или подача заявки в 1 клик</li>
                                    <li>Оповещение о несанкционированном доступе в квартиру</li>
                                    <li>Возможность построения графиков потребления энергии</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_acces.svg">
                                    <span>Управление системой контроля доступа</span>
                                </div>
                                <ul>
                                    <li>Доступ к видеокамерам</li>
                                    <li>Возможность открывать домофон и шлагбаумы</li>
                                    <li>Возможность выписать гостевой пропуск</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_msg_neon.png">
                                    <span>Быстрый способ коммуникаций и передачи данных</span>
                                </div>
                                <ul>
                                    <li>Считывание и передача данных со счетчиков</li>
                                    <li>Автоматическая рассылка квитанций</li>
                                    <li>Общение с жильцами в чате</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_tasks_neon.svg">
                                    <span>Разное</span>
                                </div>
                                <ul>
                                    <li>Возможность заказывать воду, продукты и необходимые товары из нашего Marketplace</li>
                                    <li>Возможность прокачать интеллект дома, добавив  "умные устройства"</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="functional-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
            </div>
        </div>
        <?php get_template_part( 'components/partners'); ?>

    </main>
<?php get_footer(); ?>