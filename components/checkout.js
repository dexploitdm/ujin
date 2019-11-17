function inputsCheck() {
    const nodeInputCheck = $('.check-input');
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
    });
    streetCus.on('input', function() {
        streetWoo.val(streetCus.val());
    });
    homeCus.on('input', function() {
        homeWoo.val(homeCus.val());
    });
    //По умолчанию делаем оплуту - по яндекс
    $('label[for="payment_method_ym_api_epl"]').click();
    //Переключение методов
    $('input:radio[name="setpay"]').change(function() {
        if (this.checked) {
            if (this.value == 'nal') {
                $('label[for="payment_method_cod"]').click();
                btnSubOrder.text('Оформить заказ');
            } else {
                $('label[for="payment_method_ym_api_epl"]').click();
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
            alert('Push')
        }

    });
}

$( document ).ready(function() {
    inputsCheck();
    duplicateData();
});