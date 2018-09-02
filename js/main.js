$("#lang").change(function(){
    if($(this).val() == 0) return false;

    $('#sLang').hide();
    $('#auth').show();
    //console.log($(this).val());
});
/*
$("#auth").submit(function(){
if $('#phone').hide {
    $('#phone').hide();
    $('#code').show();
    return false;
}
if $('#code').show {
    alert('ok');
    return false;
}

});
*/