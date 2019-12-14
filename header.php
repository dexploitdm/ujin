<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<!-- Carrot quest BEGIN -->
<script type="text/javascript">
!function(){function t(t,e){return function(){window.carrotquestasync.push(t,arguments)}}if("undefined"==typeof carrotquest){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//cdn.carrotquest.io/api.min.js",document.getElementsByTagName("head")[0].appendChild(e),window.carrotquest={},window.carrotquestasync=[],carrotquest.settings={};for(var n=["connect","track","identify","auth","oth","onReady","addCallback","removeCallback","trackMessageInteraction"],a=0;a<n.length;a++)carrotquest[n[a]]=t(n[a])}}(),carrotquest.connect("30435-d141c03d9a67f2d3c5e044141d");
</script>
<!-- Carrot quest END -->
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55570948, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55570948" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<meta name="yandex-verification" content="7f0b39ad81c7cb25" />
    <meta charset="UTF-8">
    <title><?php the_title() ?> | Ujin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Dexploitdm">
    <meta name="theme-color" content="#2D3C3E">
    <link href="<?php  echo get_template_directory_uri() ?>/assets/build/css/core.css" rel="stylesheet">
    <script type="text/javascript" id="ISDEKscript" src="https://dexploitdm.ru/projects/widget/widjet.js"></script>
    <?php  wp_head(); ?>
<meta name="cmsmagazine" content="2fb71f840aeb70e2fdb7bc5b0ed28704" />
</head>
<body>
<header class="">
    <div class="header-layout box">
        <div class="logo">
           <a href="<?php echo get_site_url(); ?>/">
               <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg" title="ujin">
           </a>
        </div>
        <div class="u-menu">
            <?php wp_nav_menu(array(
                'theme_location'  => 'nav_header',
                'container' => '',
                'menu_class' => 'u-menu-list',
                'add_li_class'  => 'u-menu-list-item'
            )); ?>
        </div>
        <div class="call">
<!--             <div class="call-set">
                <a href="http://localhost:3000/#" class="call-link">Заказать звонок</a>
            </div> -->
            <div class="header-card">
                <a href="<?php echo get_site_url(); ?>/cart/" class="card-link"><span class="card-title">Корзина</span> <span class="icon-card"></span><span class="card-orders"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
            </div>
            <div class="call-phone" style="margin-bottom: 5px;">
                <a href="tel:88007750519">8 800 775 05 19</a>
            </div>
        </div>
        <div class="drawer-btn js-open-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="drawer-menu">
        <div class="logo">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg" title="ujin">
        </div>
        <?php wp_nav_menu(array(
            'theme_location'  => 'nav_header',
            'container' => '',
            'menu_class' => 'u-menu-list',
            'add_li_class'  => 'u-menu-list-item'
        )); ?>
    </div>
</header>
