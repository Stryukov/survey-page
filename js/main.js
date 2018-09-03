$( document ).ready(function() {
    $("#inputPhone").mask('7 000 000 00 00');

});

$("#lang").change(function(){
    if($(this).val() == 0) return false;

    $('#sLang').hide();
    $('#auth').show();
    //console.log($(this).val());
});

$("#cfm").click(function () {
    if ($('#phone').is(":visible")) {

        if ((!$("#inputPhone").val()) || ($("#inputPhone").val().length<15)) {
            infoError('#info', 'Enter correct phone number');
            return false;
        }
        $('#phone').hide();
        $('#code').show();
        return false;
    }
    if ($('#code').is(":visible")) {
        if (!$("#inputCode").val()) {
            $('#info').html('Enter code from SMS');
            infoError('#info', 'Enter code from SMS');
            return false;
        }
        $(location).attr('href','./hello/index.html');
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
