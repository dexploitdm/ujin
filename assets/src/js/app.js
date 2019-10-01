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
    var linkNav = document.querySelectorAll('[href^="#"]'), //выбираем все ссылки к якорю на странице
        V = 0.2;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
    for (var i = 0; i < linkNav.length; i++) {
        linkNav[i].addEventListener('click', function(e) { //по клику на ссылку
            e.preventDefault(); //отменяем стандартное поведение
            var w = window.pageYOffset,  // производим прокрутка прокрутка
                hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
            t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
                start = null;
            requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
            function step(time) {
                if (start === null) start = time;
                var progress = time - start,
                    r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
                window.scrollTo(0,r);
                if (r != w + t) {
                    requestAnimationFrame(step)
                } else {
                    location.hash = hash  // URL с хэшем
                }
            }
        }, false);
    }
}

function counterProduct() {
    const countInput = $('.js-count-product'),
        countBtn = $('.product-count-btn'),
        currentPrice =  Number($('.js-current-price').text()),
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
        console.log(totalSum);
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
}

function validateContact () {
    const messageSend = $(".msg-note"),
     emailInput = $('.js-email'),
     nameInput = $('.js-name'),
     msgInput = $('.js-msg'),
     bntSubmit = $('.js-submit');

    function valid(){
        if(emailInput.val().length > 0 && nameInput.val().length > 0){
            bntSubmit.removeAttr('disabled');
        }
    }

    emailInput.focusout(function() {
        valid();
        if(emailInput.val().length > 0) {
            emailInput.css('box-shadow','none');
        }
    });
    nameInput.focusout(function() {
        valid();
        if(nameInput.val().length > 0) {
            nameInput.css('box-shadow','none');
        }
        if(emailInput.val().length === 0) {
            emailInput.css('box-shadow','0 0 17px 0px #e55151');
        }
    });
    msgInput.focusout(function() {
        valid();
        if(emailInput.val().length === 0) {
            emailInput.css('box-shadow','0 0 17px 0px #e55151');
        }
        if(nameInput.val().length === 0) {
            nameInput.css('box-shadow','0 0 17px 0px #e55151');
        }
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
    const inputEmail = formHidden.find('input[name="txtemail"]');
    const inputCount = formHidden.find('input[name="idtovar"]');
    const btnFormSubmit = $('.buyButtonOkForm ');
    const msgSuccess = $('.form-order-msg');

    $('.js-order').click( function( e ) {
        e.preventDefault();
        //order
        let count = $('.js-count-product').val();
        let price = $('.js-total-sum').text();
        let productTitle = $('.js-product-title').text();
        let orderFio = $('.js-order-fio');
        let orderEmail = $('.js-order-email');
        let orderMsg = $('.js-order-msg');

        inputCount.val(count);
        inputPrice.val(price);
        inputNameProduct.val(productTitle);
        inputName.val(orderFio.val());
        inputEmail.val(orderEmail.val());
        inputMessage.text(orderMsg.val());

        if(orderFio.val().length === 0){
            orderFio.parent().find('.is-error').fadeIn();} else {
            orderFio.parent().find('.is-error').fadeOut();}
        if(orderEmail.val().length === 0){ orderEmail.parent().find('.is-error').fadeIn();} else {
            orderEmail.parent().find('.is-error').fadeOut();}

        if(orderFio.val().length > 0
            && orderEmail.val().length > 0){
            orderFio.val('');
            orderEmail.val('');
            orderMsg.val('');
            msgSuccess.fadeIn();
            btnFormSubmit.click();
        }

    });
}

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
});