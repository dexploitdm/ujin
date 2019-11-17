function initTabs(){
//tabs
    const tabDrawer = $(".tab_drawer_heading"),
        tabListItem = $("ul.tabs li"),
        tabContent = $(".tab_content"),
        cover = $(".js-cover"),
        coverTwo = $(".js-cover-two");

    tabContent.hide();
    $(".tab_content:first").show();

    function changeBlock(val) {

        if(val.attr("rel") === 'tab1') {
            coverTwo.addClass('fade');
            cover.removeClass('fade');
        } else {
            cover.addClass('fade');
            coverTwo.removeClass('fade');

        }
    }

    tabListItem.click(function() {
        changeBlock($(this));

        tabContent.hide();
        var activeTab = $(this).attr("rel");
        $("#"+activeTab).fadeIn();
        tabListItem.removeClass("active");
        $(this).addClass("active");
        tabDrawer.removeClass("d_active");
        $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
    });

    tabDrawer.click(function() {
        tabContent.hide();
        var d_activeTab = $(this).attr("rel");
        $("#"+d_activeTab).fadeIn();
        tabDrawer.removeClass("d_active");
        $(this).addClass("d_active");
        tabListItem.removeClass("active");
        $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
    tabListItem.last().addClass("tab_last");
}


function initTabsProducts(){
    function hideTabsContent(a) {
        for (var i=a; i<tabContent.length; i++) {
            tabContent[i].classList.remove('show');
            tabContent[i].classList.add("hide");
            tab[i].classList.remove('active');
        }
    }
    function showTabsContent(b){
        if (tabContent[b].classList.contains('hide')) {
            hideTabsContent(0);
            tab[b].classList.add('active');
            tabContent[b].classList.remove('hide');
            tabContent[b].classList.add('show');
        }
    }

    const  tabContent = $('.tabContent'),
        tab = $('.tab'),
        tabAll = $('.tabs-all');

    hideTabsContent(1);

    tabAll.click(function(event) {
        var target=event.target;
        if (target.className=='tab') {
            for (var i = 0; i < tab.length; i++) {
                if (target == tab[i]) {
                    showTabsContent(i);
                    break;
                }
            }
        }
    });
}


function initHeader(){
    //header
    $(window).scroll(function() {
        const height = $(window).scrollTop();
        const header = $('header');
        if(height > 50){
            header.addClass('header-bg');
        } else{
            header.removeClass('header-bg');
        }
    });
}

function initLists() {
    const itemList = $('.js-open-list');
    itemList.click(function() {
        let currentList = $(this).parent().parent().parent();
        currentList.hasClass('list-open') ? currentList.removeClass('list-open') : listing(currentList)
    });
    function listing(currentList){
        itemList.parent().parent().parent().removeClass('list-open');
        currentList.addClass('list-open');
    }
}

function initCardImages() {
    const coverImg = $('.js-cover-product'),
        miniBoxImages = $('.js-img-cover');

    miniBoxImages.bind("click", function() {
        let currentUrl = $(this).children().attr('src');
        coverImg.attr("src", currentUrl);

        miniBoxImages.removeClass('active');
        $(this).addClass('active')
    });
}

function openMobileMenu() {
    const btnMenu = $('.js-open-menu'),
        header = $('header');
    btnMenu.bind("click", function() {
        header.hasClass('active') ? header.removeClass('active') : header.addClass('active')
    });
}

// function initSolutions() {
//     var swiper = new Swiper('.swiper-container2', {
//         pagination: {
//             el: '.swiper-pagination',
//             type: 'fraction',
//         },
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//     });
// }

//
var mySwiper = undefined;
function initSolutions() {
    var screenWidth = $(window).width();
    if(screenWidth < 992 && mySwiper == undefined) {
        mySwiper = new Swiper('.swiper-container2', {
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else if (screenWidth > 991 && mySwiper != undefined) {
        mySwiper.destroy();
        mySwiper = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}
//Services
var mySwiperServices = undefined;
function initServices() {
    var screenWidth = $(window).width();
    if(screenWidth < 992 && mySwiperServices == undefined) {
        mySwiperServices = new Swiper('.swiper-container3', {
            pagination: {
                // el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else if (screenWidth > 991 && mySwiperServices != undefined) {
        mySwiperServices.destroy();
        mySwiperServices = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}

function initGalleryProductImg() {
    const coverImg = $('.js-cover-product'),
        miniBoxImages2 = $('.woocommerce-product-gallery__image');

    miniBoxImages2.children().removeAttr('href');


    miniBoxImages2.bind("click", function() {
        let currentUrl = $(this).children().children().attr('src');
        console.log(currentUrl)
        coverImg.attr("src", currentUrl);

        miniBoxImages2.removeClass('active');
        $(this).addClass('active')
    });
}

function initShowContentTabsHome() {
    const tabList = $('.js-show-content'),
        contentBoxOne = $('.js-content-tab1'),
        contentBoxTwo = $('.js-content-tab2');

    tabList.bind("click", function() {
        let currentBox = $(this).attr('data-open');
        if(currentBox === 'person'){
            contentBoxOne.removeClass('active');
            contentBoxTwo.addClass('active')
        } else {
            contentBoxTwo.removeClass('active');
            contentBoxOne.addClass('active')
        }

    });
}

function scrollFunny() {
    var linkNav = document.querySelectorAll('[href^="#"]'), //РІС‹Р±РёСЂР°РµРј РІСЃРµ СЃСЃС‹Р»РєРё Рє СЏРєРѕСЂСЋ РЅР° СЃС‚СЂР°РЅРёС†Рµ
        V = 0.2;  // СЃРєРѕСЂРѕСЃС‚СЊ, РјРѕР¶РµС‚ РёРјРµС‚СЊ РґСЂРѕР±РЅРѕРµ Р·РЅР°С‡РµРЅРёРµ С‡РµСЂРµР· С‚РѕС‡РєСѓ (С‡РµРј РјРµРЅСЊС€Рµ Р·РЅР°С‡РµРЅРёРµ - С‚РµРј Р±РѕР»СЊС€Рµ СЃРєРѕСЂРѕСЃС‚СЊ)
    for (var i = 0; i < linkNav.length; i++) {
        linkNav[i].addEventListener('click', function(e) { //РїРѕ РєР»РёРєСѓ РЅР° СЃСЃС‹Р»РєСѓ
            e.preventDefault(); //РѕС‚РјРµРЅСЏРµРј СЃС‚Р°РЅРґР°СЂС‚РЅРѕРµ РїРѕРІРµРґРµРЅРёРµ
            var w = window.pageYOffset,  // РїСЂРѕРёР·РІРѕРґРёРј РїСЂРѕРєСЂСѓС‚РєР° РїСЂРѕРєСЂСѓС‚РєР°
                hash = this.href.replace(/[^#]*(.*)/, '$1');  // Рє id СЌР»РµРјРµРЅС‚Р°, Рє РєРѕС‚РѕСЂРѕРјСѓ РЅСѓР¶РЅРѕ РїРµСЂРµР№С‚Рё
            t = document.querySelector(hash).getBoundingClientRect().top,  // РѕС‚СЃС‚СѓРї РѕС‚ РѕРєРЅР° Р±СЂР°СѓР·РµСЂР° РґРѕ id
                start = null;
            requestAnimationFrame(step);  // РїРѕРґСЂРѕР±РЅРµРµ РїСЂРѕ С„СѓРЅРєС†РёСЋ Р°РЅРёРјР°С†РёРё [developer.mozilla.org]
            function step(time) {
                if (start === null) start = time;
                var progress = time - start,
                    r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
                window.scrollTo(0,r);
                if (r != w + t) {
                    requestAnimationFrame(step)
                } else {
                    location.hash = hash  // URL СЃ С…СЌС€РµРј
                }
            }
        }, false);
    }
}

function counterProduct() {
    const countInput = $('.js-count-product'),
        countBtn = $('.product-count-btn'),
        currentPrice =  Number($('.js-current-price').text()),
        formHiddenCount = $('.product-add-card .input-text'),
        total = $('.js-total-sum');

    let counter = countInput.val();
    let totalSum = currentPrice;

    countBtn.bind("click", function() {


        let currentBtn = $(this).attr('data-count');
        if(currentBtn === 'min'){
            if(counter > 1) {
                counter -= 1;
                totalSum = totalSum - currentPrice
            }
        } else {
            counter++;
            totalSum = totalSum + currentPrice
        }
        countInput.val(counter);
        total.text(totalSum);
        formHiddenCount.val(counter);
    });
}

function modalRun(){
    $('.open-popup-run').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.open-popup-pay').magnificPopup({
        type:'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
    $('.js-close-modal').click(function() {
        $('.mfp-close').click();
    });
}

function validateContact () {
    const messageSend = $(".msg-note"),
        phoneInput = $('.js-phone'),
        nameInput = $('.js-name'),
        msgInput = $('.js-msg'),
        bntSubmit = $('.js-submit'),
        btnYndex = $('.js-yandex-form'),
        btnYandexFooter = $('.js-yandex-form-footer'),

        nameInputPart = $('.js-name-part'),
        emailInputPart = $('.js-email-part'),
        bntSubmitPart = $('.js-submit-part');

    function valid(){
        if(phoneInput.val().length > 0 && nameInput.val().length > 0){
            bntSubmit.removeAttr('disabled');
        } else {
            if(phoneInput.val().length === 0) {
                phoneInput.addClass('error');
            } else {
                phoneInput.removeClass('error');
            }
            if(nameInput.val().length > 0) {
                nameInput.removeClass('error');
            } else {
                nameInput.addClass('error');
            }
        }


    }
    function validPart(){
        if(nameInputPart.val().length > 0 && emailInputPart.val().length > 0){
            bntSubmitPart.removeAttr('disabled');
        }
    }
    bntSubmit.click( function( e ) {
        btnYandexFooter.click();
    });
    bntSubmitPart.click( function( e ) {
        btnYndex.click();
    });

    phoneInput.focusout(function() {
        valid();
        if($('.js-phone').val().length > 0) {
            console.log($('.js-phone').val().length)
            phoneInput.removeClass('error');
        }
    });
    nameInput.focusout(function() {
        valid();
        if(nameInput.val().length > 0) {
            nameInput.removeClass('error');
        }
        if(phoneInput.val().length === 0) {
            phoneInput.addClass('error');
        }
    });
    phoneInput.on('input', function() {
        valid();
    });
    nameInput.on('input', function() {
        valid();
    });
    msgInput.on('input', function() {
        valid();
    });
    nameInputPart.on('input', function() {
        validPart();
    });
    emailInputPart.on('input', function() {
        validPart();
    });
}

function orderSubmitClick() {
    $('.clickBuyButtonCustom').click();
    const formHidden =  $('.b1c-form');

    //form hidden
    const inputName = formHidden.find('input[name="txtname"]');
    const inputPrice = formHidden.find('input[name="pricetovar"]');
    const inputNameProduct = formHidden.find('input[name="nametovar"]');
    const inputMessage = formHidden.find('.buymessage');
    //const inputEmail = formHidden.find('input[name="txtemail"]');
    const inputPhone = formHidden.find('input[name="txtphone"]');
    const inputCount = formHidden.find('input[name="idtovar"]');
    const btnFormSubmit = $('.buyButtonOkForm ');
    const msgSuccess = $('.form-order-msg');
    const btnYndexOrder = $('.js-yandex-order');

    const btnSubmitOrder = $('.js-order');



    const orderFioValid = $('.js-order-fio');
    const orderPhoneValid = $('.js-order-tel');

    orderFioValid.focusout(function() {
        if(orderFioValid.val().length > 0 && orderPhoneValid.val().length > 0) {
            btnSubmitOrder.removeAttr('disabled').addClass('success');
        } else {
            btnSubmitOrder.removeClass('success').attr('disabled');
        }
    });
    orderPhoneValid.focusout(function() {
        if(orderFioValid.val().length > 0 && orderPhoneValid.val().length > 0) {
            btnSubmitOrder.removeAttr('disabled').addClass('success');
        } else {
            btnSubmitOrder.removeClass('success').attr('disabled');
        }
    });



    btnSubmitOrder.click( function( e ) {
        e.preventDefault();
        //order
        let count = $('.js-count-product').val();
        let price = $('.js-total-sum').text();
        let productTitle = $('.js-product-title').text();
        let orderFio = $('.js-order-fio');
        //let orderEmail = $('.js-order-email');//js-order-tel
        let orderPhone = $('.js-order-tel');
        let orderMsg = $('.js-order-msg');

        inputCount.val(count);
        inputPrice.val(price);
        inputNameProduct.val(productTitle);
        inputName.val(orderFio.val());
        //inputEmail.val(orderEmail.val());
        inputPhone.val(orderPhone.val());
        inputMessage.text(orderMsg.val());

//         if(orderFio.val().length === 0){
//             orderFio.parent().find('.is-error').fadeIn();} else {
//             orderFio.parent().find('.is-error').fadeOut();}
//         if(orderPhone.val().length === 0){ orderPhone.parent().find('.is-error').fadeIn();} else {
//             orderPhone.parent().find('.is-error').fadeOut();}

        if(orderFio.val().length > 0
            && orderPhone.val().length > 0){
            orderFio.val('');
            orderPhone.val('');
            orderMsg.val('');
            msgSuccess.fadeIn();
            btnFormSubmit.click();
            btnYndexOrder.click();
        }

    });
}

function maskPhone(){
    $('.js-phone').inputmask({"mask": "(999) 999-9999"});
}

function card(){
    //Обновление корзины
    const totalAllSum = $('.info-cart-item .woocommerce-Price-amount');
    $( "button[name = 'update_cart']" ).click(function() {
        setTimeout(function(){
            let currentSum = $('.order-total .woocommerce-Price-amount').text();
            let resultSum  = currentSum.split('₽')[1];
            totalAllSum.text(resultSum);

        },3000);
    });
    //Обработчики кнопок количества
    const qualityBtn = $('.js-quality-cart');


    qualityBtn.bind("click", function() {

        let currentInput = $(this).parent().find('input');
        let qualityCount  = currentInput.val();

        let currentBtnQuality = $(this).attr('data-count');
        if(currentBtnQuality === 'min'){
            if(qualityCount > 1) {
                qualityCount -= 1;
            }
        } else {
            qualityCount++;
        }
        currentInput.val(qualityCount);
        $( "button[name = 'update_cart']" ).removeAttr('disabled').click();
    });
}
function culcSale() {
    const orderItem = $('.cart-product-item'),
        cartDiscountNode = $('.js-cart-discount'), //Скидка
        checkoutDiscountNode = $('.js-discount-checkout'), //Скидка
        totalAllInCart = $('.js-cart-total-all'), //Общее количество товаров
        totalAllInCheckout = $('.js-total-checkout-all'); //Общее количество товаров
    let sumDiscount = 0; //Сумма скидки в корзине
    let stateCountAll = 0; //Количество в корзине
    let checkoutAllQuality = 0; //Количество на странице оформления заказа
    let sumDiscountCheckout = 0;

    //console.log($('.product-quantity').text())
    //console.log(parseInt($('.product-quantity').text().replace(/[^\d]/g, '')))


    orderItem.each(function( index ) {

        let itemSale = $(this).find('.js-cart-sale');
        let itemPrice = $(this).find('.js-cart-price');
        //Количество: Для корзины
        let itemQuantity = $(this).find('.quantity input').val();
        //Количество: Для оформления заказа
        let itemCheckoutQuality = $(this).find('.js-item-count-product').text();
        let formatTotalCheckout = Number(parseInt(itemCheckoutQuality.replace(/[^\d]/g, '')));

        let strPrice = itemPrice.text().replace(/\s/g, '').substring(4).slice(0, -3);
        let numEl = parseInt(strPrice.replace(/[^\d]/g, ''));

        let discount = Number(itemSale.text()) - Number(numEl)

        let totalItemDiscount =  itemQuantity * discount;
        let totalCheckoutDiscount = formatTotalCheckout * discount;

        //Корзина
        stateCountAll = stateCountAll + Number(itemQuantity);
        sumDiscount = sumDiscount + totalItemDiscount;
        //Оформление
        checkoutAllQuality = checkoutAllQuality + Number(formatTotalCheckout);
        sumDiscountCheckout = sumDiscountCheckout + totalCheckoutDiscount;
    });
    //console.log('Итоговая скидка' + sumDiscount)
    //Корзина
    totalAllInCart.text(stateCountAll);
    cartDiscountNode.text(sumDiscount);
    //Оформление
    totalAllInCheckout.text(checkoutAllQuality);
    checkoutDiscountNode.text(sumDiscountCheckout);
}
function checkoutOrder(){
    const totalPrice = $('.checkout-total-price .amount'),
        totalPriceNode = $('.js-checkout-total-price');

    //Получение общей стоимости
    let strTotalPrice = totalPrice.text().replace(/\s/g, '').substring(4).slice(0, -3);
    let numTotal = parseInt(strTotalPrice.replace(/[^\d]/g, ''));
    let formatPrice = String(Number(numTotal)).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
    totalPriceNode.text(formatPrice)
}

$('.js-add-card').on("click", async function(e) {
    e.preventDefault();
    let currentCountCart = $('.card-orders');
    if(!$(this).hasClass('cart-in')) {
        let request = await fetch(this.href);
        let text = await request.text();
        $(this).addClass('cart-in').text('В корзине');
        currentCountCart.text(Number(currentCountCart.text()) + 1);
    }
});

$(window).on('resize', function(){
    initSolutions();
    initServices();
});


$( document ).ready(function() {
    initTabs();
    initTabsProducts();
    initHeader();
    initLists();
    //initCardImages();
    openMobileMenu();
    initSolutions();
    initServices();
    initGalleryProductImg();
    initShowContentTabsHome();
    scrollFunny();
    counterProduct();
    modalRun();
    validateContact();
    orderSubmitClick();
    //maskPhone();
    card();
    culcSale();
    checkoutOrder();
});