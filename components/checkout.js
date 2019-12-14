function inputsCheck() {

    
    const nodeInputCheck = $('.check-input');
    
    
    for (i = 0; i < nodeInputCheck.length; i++) {
        if($(nodeInputCheck[i]).val().length > 0){
            $(nodeInputCheck[i]).parent().addClass('is-focus')
        }
    }
   
    
    nodeInputCheck.focus(function() {
        $(this).parent().addClass('is-focus');
    });
    nodeInputCheck.focusout(function(){
        if(!$(this).val().length > 0){
            $(this).parent().removeClass('is-focus');
        } else {
            $(this).parent().removeClass('this-error');
        }
    });

    const methodCur = $('.method-cur'),
        methodPnz = $('.method-pnz');
    $('input:radio[name="method"]').change(function() {
        if (this.checked) {
            if (this.value == 'pnz') {
                methodCur.hide();
                methodPnz.show();
            } else {
                methodPnz.hide();
                methodCur.show();
            }
        }
    });
}

function duplicateData() {
    //Nodes custom
    const fioCus = $('.js-check-fio'),
        phoneCus = $('.js-check-phone'),
        emailCus = $('.js-check-email'),
        cityCus = $('.js-check-city'),
        streetCus = $('.js-check-street'),
        homeCus = $('.js-check-home'),
        btnSubOrder = $('.js-btn-checkout');

    //Nodes Woo
    const nameWoo = $('#billing_first_name'),
        phoneWoo = $('#billing_phone'),
        emailWoo = $('#billing_email'),
        cityWoo = $('#billing_address_1'),
        streetWoo = $('#billing_new_fild10'),
        homeWoo = $('#billing_new_fild11'),
        btnSubWoo = $('#place_order');

    fioCus.on('input', function() {
        nameWoo.val(fioCus.val());
    });
    phoneCus.on('input', function() {
        phoneWoo.val(phoneCus.val());
    });
    emailCus.on('input', function() {
        emailWoo.val(emailCus.val());
    });
    cityCus.on('input', function() {
        cityWoo.val(cityCus.val());
          $('#billing_address_1').val(cityCus.val());
    });
    streetCus.on('input', function() {
        streetWoo.val(streetCus.val());
    });
    homeCus.on('input', function() {
        homeWoo.val(homeCus.val());
    });
    //По умолчанию делаем оплуту - по яндекс
     if($('label[for="payment_method_ym_api_epl"]').length > 0){
             $('label[for="payment_method_ym_api_epl"]').click();
     } else {
         $('label[for="payment_method_ym_api_widget"]').click();
     }

    //Переключение методов
    $('input:radio[name="setpay"]').change(function() {
        if (this.checked) {
            if (this.value == 'nal') {
                $('label[for="payment_method_cod"]').click();
                btnSubOrder.text('Оформить заказ');
            } else {
                if($('label[for="payment_method_ym_api_epl"]').length > 0){
                     $('label[for="payment_method_ym_api_epl"]').click();
                } else {
                      $('label[for="payment_method_ym_api_widget"]').click();
                }
               
                btnSubOrder.text('Перейти к оплате');
            }
        }
    });



    btnSubOrder.bind("click", function() {
        if(!fioCus.val().length > 0){
            fioCus.parent().addClass('this-error');
            fioCus.focus();
        } else if(!phoneCus.val().length > 0){
            phoneCus.parent().addClass('this-error');
            phoneCus.focus();
        } else if(!emailCus.val().length > 0){
            emailCus.parent().addClass('this-error');
            emailCus.focus();
        } else if($('#radio-1').is(':checked')){
            //Если выбрана доставка курьером
            if(!cityCus.val().length > 0){
                cityCus.parent().addClass('this-error');
                cityCus.focus();
            } else if(!streetCus.val().length > 0){
                streetCus.parent().addClass('this-error');
                streetCus.focus();
            } else if(!homeCus.val().length > 0){
                homeCus.parent().addClass('this-error');
                homeCus.focus();
            } else {
                subPush();
            }
        }



        else {
            subPush();
        }

        function subPush() {
            //('Push');
            $('#place_order').click()
        }

    });
}

function checkoutSuccess(){
    const blockSuccess = $('.check-end'),
        cusNumber = $('.js-success-number');
    if(blockSuccess.length > 0){
        //Номер заказа
        let wooNumber = $('.woocommerce-order-overview__order strong').text();
        cusNumber.text(wooNumber)
    }
}

function dateProduct() {
    const dateProduct = $('.js-date-product');
    const blockSucces = $('.address .form-field-wide');
    const successResultDate = $('.js-success-date');
    
    if(dateProduct.length > 0 ){
        let arrDate = [];

        for (i = 0; i < dateProduct.length; ++i) {
            let itemDate = Number($(dateProduct[i]).text());
            //console.log(itemDate)
            arrDate.push(itemDate)
        }
        //console.log(arrDate)
        var maxDay = Number(Math.max.apply(null, arrDate));
        
        var currentDate = new Date();
        currentDate.setDate(currentDate.getDate() + maxDay);

        const resultDate = currentDate.getDate() + '.' + currentDate.getMonth() + '.' + currentDate.getFullYear()
       
        $('#billing_new_fild13').val(resultDate);
    }
    if(blockSucces.length > 0){
        for (box = 0; box < blockSucces.length; ++box) {
            let targetBox = $(blockSucces[box]).find('strong').text()
            if(targetBox === 'Дата доставки:'){
                $(blockSucces[box]).find('label').remove();
                //console.log($(blockSucces[box]).text());
                successResultDate.text($(blockSucces[box]).text())
            }
        }
    }
    

       
    
}

$( document ).ready(function() {
    inputsCheck();
    duplicateData();
    checkoutSuccess();
    dateProduct();
});