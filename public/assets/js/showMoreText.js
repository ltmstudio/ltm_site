$(document).ready(function() {
    var summaryText = $('summary p');
    var icon = $('summary svg');

    $('details').on('toggle', function() {
        if ($(this).attr('open')) {
            summaryText.animate({ opacity: 0 }, 200, function() {
                $(this).text('Скрыть').animate({ opacity: 0.4 }, 200);
            });
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        } else {
            summaryText.animate({ opacity: 0 }, 200, function() {
                $(this).text('Показать ещё').animate({ opacity: 0.4 }, 200);
            });
            icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }
    });


    $('details').on('toggle', function() {
        const icon = $(this).find('.show-more-btn svg, .hide-more-btn svg');
        
        icon.toggleClass('rotate'); // Переключает класс поворота на каждом открытии/закрытии
    });
});
