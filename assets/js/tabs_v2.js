jQuery(function($){
    $(document).ready(function () {
        $('.tabs_v2').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
        $('.accordion-tabs').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
        $('.accordion-tabs').on('click', 'li > a', function(event) {
            if (!$(this).hasClass('is-active')) {
                event.preventDefault();
                $('.accordion-tabs .is-open').removeClass('is-open').hide();
                $(this).next().toggleClass('is-open').toggle();
                $('.accordion-tabs').find('.is-active').removeClass('is-active');
                $(this).addClass('is-active');
            } else {
                event.preventDefault();
            }
        });
    });
});