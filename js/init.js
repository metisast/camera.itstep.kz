$(function () {

    if($('div').is('#map')){
        // Init svg library
        var r = Raphael('map', 800, 800),
            // Создаем новый объект canvas, в котором будет происходить рисование контуров
            attributes = {
                fill: '#fff',
                stroke: '#3899E6',
                'stroke-width': 1,
                'stroke-linejoin': 'round'
            },
            // Создаем объект 'attributes' с параметрами
            arr = new Array();

        // Проходим циклом все контуры (которые включены в объект paths), выводим их и устанавливаем атрибуты для них
        for (var country in paths) {
            var obj = r.path(paths[country].path);
            obj.attr(attributes).node.setAttribute('id', paths[country].id);
            obj.node.style.transform = 'scale(0.7)';// Маштабируем вектор

            // Выбираем только активные города
            if(paths[country].click){
                obj.hover(function(){
                    this.animate({
                        fill: '#1669AD',
                    }, 300);
                }, function(){
                    this.animate({
                        fill: attributes.fill
                    }, 300);
                });
                obj.node.style.cursor = 'pointer';

                // Вешаем обработчик и запускаем модальное окно для авторизации
                $(obj.node).on('click', function () {
                    $('#modal1').modal('open');
                });
            }
        }
    }

});