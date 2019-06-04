$( document ).ready(function() {
	$('#inputTel').mask('0-000-000-0000');
    $("#lang").on('click', 'a', function(){
      $("#btn-lang").html($(this).html());
      chgLang($(this).text().substring(2, 4));
      //$('#inputTel').focus();
   });
});

function chgLang (l) {
    var request = new XMLHttpRequest();
    request.open('GET', 'lang.json');
    request.responseType = 'json';
    request.send();
    request.onload = function() {
      var lang = request.response;
      var langs = lang[l];
        $('#title').html(langs[0]['title']);
        $('#content').html(langs[0]['content']);
        $('#svc1').html(langs[0]['svc1']);
        $('#svc2').html(langs[0]['svc2']);
        $('#info').html(langs[0]['info']);
        $('#iph').html(langs[0]['iph']);
        $('#btn').html(langs[0]['btn']);
        $('#content2').html(langs[0]['content2']);
    }  	
}

$(document).on('submit','form.form-signin',function(){
   $('#reg').hide();
   $('#call').show();
   return false;
});
