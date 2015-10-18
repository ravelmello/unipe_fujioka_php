$(function () {

    var formLogn = $('#loginForm');

    formLogn.submit(function (e) {
        var formData = {
            'us_email' : $('input[name="userid"]').val(),
            'us_senha' : $('input[name="password"]').val()
        };

        $.ajax({
            type : 'POST',
            url  : 'ajax/ajax_login.php?action=signin',
            data : formData,
            dataType : 'json',
            encode : true
        }).done(function (data) {
            if(!data.success) {
                if(data.errors.user) {
                    $('#msg').html('<span class="alert alert-danger">' + data.errors.user + '</span>');
                }

                if(data.errors.pass) {
                    $('#msg').html('<span class="alert alert-danger">' + data.errors.pass + '</span>');
                }

                if(data.errors.message) {
                    $('#msg').html('<div class="alert alert-danger">' + data.errors.message + '</div>');
                }
            } else {
                $('#msg').html('<div class="msg sucesso">' + data.errors.message + '</div>');
                setTimeout(function() {
                        window.location = './panel/';
                    }, 2000);
            }
        }).fail(function (data) {
            console.log(data);
        });
        e.preventDefault();
    });
}());