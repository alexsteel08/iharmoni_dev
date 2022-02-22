jQuery(function($){
    $(document).ready(function () {
        $('.tabs_v2').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
        $('.cta-tabs_v2').children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
        $('.cta-tabs_v2').on('click', 'li > a', function(event) {
            if (!$(this).hasClass('is-active')) {
                event.preventDefault();
                $('.cta-tabs_v2 .is-open').removeClass('is-open').hide();
                $(this).next().toggleClass('is-open').toggle();
                $('.cta-tabs_v2').find('.is-active').removeClass('is-active');
                $(this).addClass('is-active');
            } else {
                event.preventDefault();
            }
        });
    });
});


// select all accordion items
const accItems = document.querySelectorAll(".accordion__item");

// add a click event for all items
accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

function toggleAcc() {
    // remove active class from all items exept the current item (this)
    accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
    );

    // toggle active class on current item
    if (this.classList != "accordion__item--active") {
        this.classList.toggle("accordion__item--active");
    }
}
