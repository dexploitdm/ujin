function inputsCheck() {
    const nodeInputCheck = $('.check-input');
    nodeInputCheck.focus(function() {
        $(this).parent().addClass('is-focus');
    });
    nodeInputCheck.focusout(function(){
        if(!$(this).val().length > 0){
            $(this).parent().removeClass('is-focus');
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


$( document ).ready(function() {
    inputsCheck();
});