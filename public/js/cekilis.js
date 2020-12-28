$(document).ready(function(){
    var listeler=[];

    $('<input>').attr({
        type: 'hidden',
        name: 'kullaniciListesi'
    }).appendTo('form');

    $("ul").on("click", "li", function(){
    $(this).toggleClass("completed");
    });
    
    
    $("ul").on("click", "span", function(event){
        $(this).parent().fadeOut(500,function(){
            $(this).remove();
        });
        event.stopPropagation();
    });

    $("#ekle").click(function(){
        var name = $('#kullanici_adi').val();
        if (name.length < 1) {
            alert('Kullanıcı Adı Boş Bırakılamaz!');
            return false;
        }

        var value = $('#sürücü_belgesi').is(':checked');                
        var sürücüBelgesi = '';

        if (value) {    
            sürücüBelgesi =  "Sürücü Belgesi Var";
        } else {
            sürücüBelgesi = "Sürücü Belgesi Yok";
        }

        var todoText = ($("#kullanici_adi").val() + ' - ' +  $("[name='cinsiyet']:checked").val()  + ' - ' + 
            $("[name='calistigi_birim']").val() + ' - ' +  sürücüBelgesi);
        
        $("ul").append("<li><span><i>Sil</i></span>" + todoText + "</li>")

        listeler.push(todoText);
        $("input[name=kullaniciListesi]").val(listeler.join(', '));
        
    });
    
    $(".fa-plus").click(function(){
        $("input[type='text']").fadeToggle();
    });
    
    $('#sürücü_belgesi').on('change', function (e) {
        var value = $('#sürücü_belgesi').is(':checked');                
    
        if (value) {    
            $('#sürücü_belgesi_text').text("Sürücü Belgesi Var");
        } else {
            $('#sürücü_belgesi_text').text("Sürücü Belgesi Yok");
        }
    });

    $('input').on('input', function() {
        $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
    });
    
});