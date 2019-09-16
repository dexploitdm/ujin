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

$( document ).ready(function() {
    initTabs();
    initHeader();
    initLists();
});