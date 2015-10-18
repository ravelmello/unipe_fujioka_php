$(function(){

    $('form').submit(function(){
        var login = $(this).serialize() + '&action=login';
        $.ajax({
            url : 'ajax/ajax_login.php',
            data: login,
            type: 'POST',
            success: function(result){
               if(result == 'empty'){
                    $('.msg').empty().html('<p class="aviso">Informe seu usuário e senha!</p>').fadeIn('slow');
               }else if(result == 'errorpass'){
                    $('.msg').empty().html('<p class="erro">Erro ao logar! Dados não conferem!</p> ').fadeIn('slow');
               }else if(result == 'success'){
                    $('.msg').empty().html('<p class="sucesso">Login efetuado, aguarde...</p>').fadeIn('slow');
                   window.setTimeout(function(){
                        $(location).attr('href','panel/dashboard.php');
                   }, 1000);
               }
            }
        });
        return false;
    });
});