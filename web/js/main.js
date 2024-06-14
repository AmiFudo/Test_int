// Редактирование скорости

    $('.rate__list_element_speed_setting').on('click', function(){

        id = $(this).data('id');

        $('.rate__list_element_speed_setting_block.'+id+'').css('display','flex');
        $('.speed.'+id+'').css('display','none');

    });

// Редактирование скорости

// Сохранение скорости

    $('.rate__list_element_speed_setting.save').on('click', function(){
        
        id = $(this).data('id');

        val = $('.rate__list_element_speed_setting_block.'+id+' input').val();
        
        // Отправление данных ajax запросом

        if($.isNumeric(val)){

            $('.rate__list_element_speed_setting_block.'+id+'').css('display','none');
            $('.speed.'+id+'').css('display','block');

            $('.speed.'+id+' .value').text(val);

            $.ajax({
                url: '/basic/web/index.php?r=site/updaterate',
                method: 'get',
                dataType: 'html',
                data: {id: id, speed: val},
                success: function(data){
                    console.log(data);
                }
            })
        } else {
            alert('Значение должно быть числом');
        }



        // Отправление данных ajax запросом

    });

// Сохранение скорости