// Crear encabezado de canje
$(document).ready(function () {
    $("#searchUser").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: 'search/',
            data: {
                '_token': $('input[name=_token]').val(),
                'email': $('input[name=email]').val()
            },
            success:function (data) {
                if ((data.errors)) {
                    $.each(data.errors,function(key,value){
                        $("#errorEmail").show();
                        $("#errorEmail").append(value);
                    });

                }else{
                    $("#userSuccess").show();
                    $("#email").prop('disabled',true);
                    $("#registrarCanje").removeClass('btn btn-success btn-sm disabled').addClass('btn btn-success btn-sm');
                    $("#cliente_id").val(data['id']);
                }
            }
        });

    });

    $("#registrarCanje").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'create/',
            data: {
                '_token': $('input[name=_token]').val(),
                'centro_id': $('input[name=centro_id]').val(),
                'cliente_id': $('input[name=cliente_id]').val()
            },
            success:function (data) {
                $("#addDetail").removeClass('btn btn-success btn-sm disabled').addClass('btn btn-success btn-sm');
                $("#material").prop('disabled',false);
                $("#cantidad").prop('disabled',false);
                $("#registrarCanje").hide();
                $("#registrarCanje").removeClass('btn btn-success btn-sm').addClass('btn btn-success btn-sm disabled');
                $("#cliente_id").val(data['id']);
            }
        });
    });
});
