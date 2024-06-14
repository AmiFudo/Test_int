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

        $('.rate__list_element_speed_setting_block.'+id+'').css('display','none');
        $('.speed.'+id+'').css('display','block');
        val = $('.rate__list_element_speed_setting_block.'+id+' input').val();

        $('.speed.'+id+' .value').text(val);

    });

// Сохранение скорости