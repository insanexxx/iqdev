function Send(){
    jQuery.ajax({
        dataType: "json",   
        type: "POST",
        url: "localhost/iqdev",
        data: {message: jQuery('#mainform').val()
    }
    }).done(function(msg){
        jQuery('.result').text(msg['answer']);
    })
}
$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: 'Предыдущий',
	nextText: 'Следующий',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['ru']);

$( function() {
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    $('#datepicker').datepicker({
	    showOn: "both"
	});
  } );

  $(document).ready(function() {
    $("#mainform").validate({
        rules: {
            sum: {
                required: true,
                minlenght: 4,
                maxlenght: 7,
                min: 1000,
                max: 3000000
            },
            term: {
                required: true,
                minlenght: 1,
                maxlenght: 2,
                min: 1,
                max: 60
            },
            sumAdd: {
                required: true,
                minlenght: 1,
                maxlenght: 7,
                min: 0,
                max: 3000000
            },
            percent:{
                required: true,
                minlenght: 1,
                maxlenght: 3,
                min: 3,
                max: 100
            }
        }
    });
    });