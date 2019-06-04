$( document ).ready(function() {
    $("#inputPhone").mask('0 000 000 00 00');

});

$("#lang").change(function(){
    if($(this).val() == 0) return false;
    l = $(this).val();
    if (l == 'RU') {
        $('#titlePhone').html('Введите номер телефона');
        $('#labelPhone').html('Телефон');
        $('#titleCode').html('Введите код из СМС');
        $('#labelCode').html('Код');
        $('#cfm').html('Подтвердить');        
    } 
    $('#sLang').hide();
    $('#auth').show();
});

$("#cfm").click(function () {
    if ($('#phone').is(":visible")) {

        if ((!$("#inputPhone").val()) || ($("#inputPhone").val().length<15)) {
            if (l == 'RU') {infoError('#info', 'Введите правильно номер телефона');} else {infoError('#info', 'Enter correct phone number');}
            return false;
        }
        $('#phone').hide();
        $('#code').show();
        return false;
    }
    if ($('#code').is(":visible")) {
        if (!$("#inputCode").val()) {
            $('#info').html('Enter code from SMS');
            if (l == 'RU') {infoError('#info', 'Введите пожалуйста код');} else {infoError('#info', 'Enter code from SMS');}
            return false;
        }
        $(location).attr('href','./welcome.php?lang='+l);
        return false;
    }
});

function infoError(selector, text) {
    $(selector).show();
    $(selector).html(text);
    setTimeout(function(){
        $(selector).hide();
    }, 4000);
}
