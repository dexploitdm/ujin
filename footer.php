<footer>
    <div class="footer-layout box">
        <h2 class="title-h2">Получите консультацию</h2>
        <div class="footer-layout-box">
            <div class="footer-layout-box_item">
                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <span>Телефон</span>
                        <a class="footer-contact-item_link" href="tel:+8 800 775 05 19">8 800 775 05 19</a>
                    </div>
                    <div class="footer-contact-item">
                        <span>E-mail</span>
                        <a class="footer-contact-item_link" href="mailto:info@mysmartflat.ru">info@mysmartflat.ru</a>
                    </div>
                    <div class="footer-contact-item">
                        <span>Пишите</span>
                        <div class="links-soc">
                            <a href="#" class="links-soc-w">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/whatsapp.png"> <p>Whatsapp</p>
                            </a>
                            <a href="#" class="links-soc-t">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/telegram.png"> <p>Telegram</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-layout-box_item">
                <div class="footer-form">
                    <div class="footer-form-layout">
                        <div class="footer-form-desc">
                            Свяжитесь с нами и мы подберем для вам наиболее подходящее предложение
                        </div>
                        <form method="post">
                            <div class="u-controls">
                                <input class="u-input" type="text" placeholder="Ваш E-mail" name="email">
                            </div>
                            <div class="u-controls">
                                <input class="u-input" type="text" placeholder="Как вас зовут" name="name">
                            </div>
                            <div class="u-controls">
                                <input class="u-input" type="text" placeholder="Вопрос или комментарий" name="msg">
                            </div>
                            <div class="u-controls center">
                                <button class="u-btn" type="submit">
                                    Отправить
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-layout-menu">
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">О компании</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/">О нас</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Партнерам</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">СМИ о нас</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">База знаний</a> </li>
                </ul>
            </div>
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">Продукты</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/property-developers">Для застройщиков</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/hotels">Для гостиниц</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/communal-services/">Для УК и ТСЖс</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/catalogs">Каталог</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Маркетплейс</a> </li>
                </ul>
            </div>
            <div class="footer-layout-menu-item">
                <a href="#" class="menu-title">Приложения</a>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/">Ujin SmartHome</a> </li>
                    <li><a href="<?php echo get_site_url(); ?>/">Ujin Bussines</a> </li>
                </ul>
            </div>
        </div>
        <div class="footer-layout-bottom">
            <div class="footer-layout-bottom_item">
                <div class="footer-logo">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg">
                </div>
            </div>
            <div class="footer-layout-bottom_item">
                <span class="copy">ООО «Юникорн» 2019</span>
            </div>
            <div class="footer-layout-bottom_item">
                <div class="footer-el">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/skolkovo.png">
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/jquery.js"></script>
<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/swiper.js"></script>
<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/app.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>