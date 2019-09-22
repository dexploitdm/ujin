function initTabs(){
//tabs
    const tabDrawer = $(".tab_drawer_heading"),
        tabListItem = $("ul.tabs li"),
        tabContent = $(".tab_content");

    tabContent.hide();
    $(".tab_content:first").show();

    tabListItem.click(function() {
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

$(window).on('resize', function(){
    initSolutions();
    initServices();
});


$( document ).ready(function() {
    initTabs();
    initTabsProducts();
    initHeader();
    initLists();
    initCardImages();
    openMobileMenu();
    initSolutions();
    initServices();
});