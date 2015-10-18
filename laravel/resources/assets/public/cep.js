$(function (){
    $('#cep').blur(function() {
        var cepData = $('#cep').val();
        if(cepData != '' && cepData.length == 9) {
            $.ajax({
                type: 'POST',
                url: 'http://cep.republicavirtual.com.br/web_cep.php?cep=' + cepData + '&formato=json',
                dataType: 'json',
                encode: true
            }).done(function (data) {
                if (data.resultado) {
                    $('input[name="cidade"]').val(data.cidade);
                    $('input[name="endereco"]').val(data.logradouro + ', ' + data.bairro);
                    $('#estado').append('<option value="' + data.uf + '">' + data.uf + '</option>');
                } else {
                    $('#msg').html('<div class="alert alert-success">CEP não encontrado!</div>');
                }
            }).fail(function (data) {
                console.log(data);
            });
        }
    });
}());