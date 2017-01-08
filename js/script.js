(function ($) {

    $(function () {

        // Регестрируем адаптивное меню
        $(".button-collapse").sideNav();
        // Регестрируем модальное окно
        $('.modal').modal();
        // Регестрируем select
        $('select').material_select();

        var rooms = $('#rooms');
        var embedScript = $('#embed-script');
        var btnAuth = $('.btn-auth');

        // Выбор камеры
        rooms.change(function () {
            var id = $(this).val();
            var ip = $(this).data('ip');
            console.log(ip);
            var path = '/camera_picker.php';
            console.log(path);
            $.ajax({
                url: path,
                type: 'POST',
                data: {id: id, ip: ip},
                success: function (data) {
                    embedScript.append(data);
                },
                error: function (err) {
                    console.log(err)
                }
            });
        });

        // авторизация
        btnAuth.click(function () {
            $('.progress').show();
            var data = $('#form-auth').serialize();
            $.ajax({
                url: '/auth.php',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function (data) {
                    if(data.message == 'OK'){
                        Materialize.toast('Вы успешно авторизованы!', 2000, '', function () {
                            window.location = '/camera.php'
                        });
                    }
                },
                error: function (err) {
                    var errData = JSON.parse(err.responseText);

                    if(errData.code == 422){
                        Materialize.toast('Введите данные', 2000, '', function () {});
                    }
                    if(errData.code == 421){
                        Materialize.toast('Неверный логин или пароль', 2000, '', function () {});
                    }
                },
                complete: function () {
                    $('.progress').hide();
                }
            });

            return false;
        })
    })

})(jQuery);