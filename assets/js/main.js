//menu burger
// jQuery(document).ready(function($){
//     $('.header-burger').click(function(event) {
//        $('.header-burger,.header-menu').toggleClass('active');
//        $('body').toggleClass('lock');
//     });
// });

// jQuery(document).ready(function($){
//     $('.wpcf7-intl-tel').on('input', function() {
//         $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё-і]/, ''))
//     });
// });

jQuery(function($){
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        /*Если сделали скролл на 100px задаём новый класс для header*/
        if(height > 20){
            $('header').addClass('header_shadow');
        } else{
            /*Если меньше 100px удаляем класс для header*/
            $('header').removeClass('header_shadow');
        }
    });
});


// Dynamic Adapt v.1
// HTML data-da="where(uniq class name),position(digi),when(breakpoint)"
// e.x. data-da="item,2,992"

"use strict";

(function () {
    let originalPositions = [];
    let daElements = document.querySelectorAll('[data-da]');
    let daElementsArray = [];
    let daMatchMedia = [];
    //Заполняем массивы
    if (daElements.length > 0) {
        let number = 0;
        for (let index = 0; index < daElements.length; index++) {
            const daElement = daElements[index];
            const daMove = daElement.getAttribute('data-da');
            if (daMove != '') {
                const daArray = daMove.split(',');
                const daPlace = daArray[1] ? daArray[1].trim() : 'last';
                const daBreakpoint = daArray[2] ? daArray[2].trim() : '767';
                const daType = daArray[3] === 'min' ? daArray[3].trim() : 'max';
                const daDestination = document.querySelector('.' + daArray[0].trim())
                if (daArray.length > 0 && daDestination) {
                    daElement.setAttribute('data-da-index', number);
                    //Заполняем массив первоначальных позиций
                    originalPositions[number] = {
                        "parent": daElement.parentNode,
                        "index": indexInParent(daElement)
                    };
                    //Заполняем массив элементов
                    daElementsArray[number] = {
                        "element": daElement,
                        "destination": document.querySelector('.' + daArray[0].trim()),
                        "place": daPlace,
                        "breakpoint": daBreakpoint,
                        "type": daType
                    }
                    number++;
                }
            }
        }
        dynamicAdaptSort(daElementsArray);

        //Создаем события в точке брейкпоинта
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daBreakpoint = el.breakpoint;
            const daType = el.type;

            daMatchMedia.push(window.matchMedia("(" + daType + "-width: " + daBreakpoint + "px)"));
            daMatchMedia[index].addListener(dynamicAdapt);
        }
    }
    //Основная функция
    function dynamicAdapt(e) {
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daElement = el.element;
            const daDestination = el.destination;
            const daPlace = el.place;
            const daBreakpoint = el.breakpoint;
            const daClassname = "_dynamic_adapt_" + daBreakpoint;

            if (daMatchMedia[index].matches) {
                //Перебрасываем элементы
                if (!daElement.classList.contains(daClassname)) {
                    let actualIndex = indexOfElements(daDestination)[daPlace];
                    if (daPlace === 'first') {
                        actualIndex = indexOfElements(daDestination)[0];
                    } else if (daPlace === 'last') {
                        actualIndex = indexOfElements(daDestination)[indexOfElements(daDestination).length];
                    }
                    daDestination.insertBefore(daElement, daDestination.children[actualIndex]);
                    daElement.classList.add(daClassname);
                }
            } else {
                //Возвращаем на место
                if (daElement.classList.contains(daClassname)) {
                    dynamicAdaptBack(daElement);
                    daElement.classList.remove(daClassname);
                }
            }
        }
        customAdapt();
    }

    //Вызов основной функции
    dynamicAdapt();

    //Функция возврата на место
    function dynamicAdaptBack(el) {
        const daIndex = el.getAttribute('data-da-index');
        const originalPlace = originalPositions[daIndex];
        const parentPlace = originalPlace['parent'];
        const indexPlace = originalPlace['index'];
        const actualIndex = indexOfElements(parentPlace, true)[indexPlace];
        parentPlace.insertBefore(el, parentPlace.children[actualIndex]);
    }
    //Функция получения индекса внутри родителя
    function indexInParent(el) {
        var children = Array.prototype.slice.call(el.parentNode.children);
        return children.indexOf(el);
    }
    //Функция получения массива индексов элементов внутри родителя
    function indexOfElements(parent, back) {
        const children = parent.children;
        const childrenArray = [];
        for (let i = 0; i < children.length; i++) {
            const childrenElement = children[i];
            if (back) {
                childrenArray.push(i);
            } else {
                //Исключая перенесенный элемент
                if (childrenElement.getAttribute('data-da') == null) {
                    childrenArray.push(i);
                }
            }
        }
        return childrenArray;
    }
    //Сортировка объекта
    function dynamicAdaptSort(arr) {
        arr.sort(function (a, b) {
            if (a.breakpoint > b.breakpoint) { return -1 } else { return 1 }
        });
        arr.sort(function (a, b) {
            if (a.place > b.place) { return 1 } else { return -1 }
        });
    }
    //Дополнительные сценарии адаптации
    function customAdapt() {
        //const viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    }
}());


jQuery(document).ready(function($){
    // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

    /* if in tab mode */
    $("ul.tabs li").click(function() {

        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#"+activeTab).fadeIn();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

        /*$(".tabs").css("margin-top", function(){
           return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
        });*/
    });
    $(".tab_container").css("min-height", function(){
        return $(".tabs").outerHeight() + 50;
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");
        $("#"+d_activeTab).fadeIn();

        $(".tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });


    /* Extra class "tab_last"
       to add border to bottom side
       of last tab
    $('ul.tabs li').last().addClass("tab_last");*/

});



var page = 2;
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': blog.security
        };

        $.post(blog.ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $('.blog-posts').append(response);
                page++;
            } else {
                $('.loadmore').hide();
            }
        });
    });
});


jQuery(function($){
    $('#true_loadmore').click(function(){
        $(this).text('Loading ...');
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if( data ) {
                    $('#true_loadmore').text('OLDER POSTS').before(data);
                    current_page++;
                    if (current_page == max_pages) $("#true_loadmore").remove();
                } else {
                    $('#true_loadmore').remove();
                }
            }
        });
    });
});

jQuery(function($){
    $(function () {

        $('.md-trigger').on('click', function() {
            $('.md-modal').addClass('md-show');
        });

        $('.md-close').on('click', function() {
            $('.md-modal').removeClass('md-show');
        });

    });
});






jQuery(function($){

    var currentSlide = 0,
        $slideContainer = $('.slide-container'),
        $slide = $('.slide'),
        slideCount = $slide.length;

    function setSlideDimensions () {
        var windowWidth = $(window).width();
        $slideContainer.width(windowWidth * slideCount);
        $slide.width(windowWidth);
    }

    function generatePagination () {
        var $pagination = $('.pagination');
        for(var i = 0; i < slideCount; i ++){
            var $indicator = $('<div>').addClass('indicator'),
                $progressBarContainer = $('<div>').addClass('progress-bar-container'),
                $progressBar = $('<div>').addClass('progress-bar'),
                indicatorTagText = $slide.eq(i).attr('data-tag'),
                $tag = $('<div>').addClass('tag').text();
            $indicator.append($tag);
            $progressBarContainer.append($progressBar);
            $pagination.append($indicator).append($progressBarContainer);
        }
        $pagination.find('.indicator').eq(0).addClass('active');
    }

    function goToNextSlide () {
        if(currentSlide >= slideCount - 1) return;
        var windowWidth = $(window).width();
        currentSlide++;
        $slideContainer.animate({
            left: -(windowWidth * currentSlide)
        });
        setActiveIndicator();
        $('.progress-bar').eq(currentSlide - 1).animate({
            width: '100%'
        });
    }

    function goToPreviousSlide () {
        if(currentSlide <= 0) return;
        var windowWidth = $(window).width();
        currentSlide--;
        $slideContainer.animate({
            left: -(windowWidth * currentSlide)
        });
        setActiveIndicator();
        $('.progress-bar').eq(currentSlide).animate({
            width: '0%'
        });
    }

    function postitionSlides () {
        var windowWidth = $(window).width();
        setSlideDimensions();
        $slideContainer.css({
            left: -(windowWidth * currentSlide)
        });
    }

    function setActiveIndicator () {
        var $indicator = $('.indicator');
        $indicator.removeClass('active').removeClass('complete');
        $indicator.eq(currentSlide).addClass('active');
        for(var i = 0; i < currentSlide; i++){
            $indicator.eq(i).addClass('complete');
        }
    }

    setSlideDimensions();
    generatePagination();
    $(window).resize(postitionSlides);
    $('.next').on('click', goToNextSlide);
    $('.previous').on('click', goToPreviousSlide);
});




jQuery(document).ready(function($){
    $(function(){
        var current = location.pathname;
        $('.blog_category_list ul li a').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active
            if($this.attr('href').indexOf(current) !== -1){
                $this.addClass('current');
            }
        })
    })
});




jQuery(document).ready(function($){

    setShareLinks();

    function socialWindow(url) {
        var left = (screen.width -570) / 2;
        var top = (screen.height -570) / 2;
        var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;  window.open(url,"NewWindow",params);}

    function setShareLinks() {
        var pageUrl = encodeURIComponent(document.URL);
        var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));

        $(".social-share.facebook").on("click", function() { url="https://www.facebook.com/sharer.php?u=" + pageUrl;
            socialWindow(url);
        });

        $(".social-share.twitter").on("click", function() {
            url = "https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + tweet;
            socialWindow(url);
        });

        $(".social-share.linkedin").on("click", function() {
            url = "https://www.linkedin.com/shareArticle?mini=true&url=" + pageUrl;
            socialWindow(url);
        })
    }


});



AOS.init({
    disable: function() {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
    }
});






jQuery(document).ready(function($){
    $(function () {
        var parallaxElements = $('.parallax'),
            parallaxQuantity = parallaxElements.length;

        $(window).on('scroll', function () {

            window.requestAnimationFrame(function () {

                for (var i = 0; i < parallaxQuantity; i++) {
                    var currentElement =  parallaxElements.eq(i);
                    var scrolled = $(window).scrollTop();

                    currentElement.css({
                        'transform': 'translate3d(0,' + scrolled * -0.3 + 'px, 0)'
                    });

                }
            });

        });
    });
});


jQuery(function($){
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top + -130
        }, 1500);
    });

});
jQuery(document).ready(function($){
    $( document ).ready(function() {
        $('.trigger').click(function() {
            $('.modal-wrapper').toggleClass('open');
            $('.page-wrapper').toggleClass('blur');
            // $('body').toggleClass('_lock');
            return false;
        });
    });

});

// jQuery(document).ready(function($){
//     $('.video_item').parent().click(function () {
//         if($(this).children(".video_item").get(0).paused){$(this).children(".video_item").get(0).play();   $(this).children(".playpause").fadeOut();
//         }else{       $(this).children(".video_item").get(0).pause();
//             $(this).children(".playpause").fadeIn();
//         }
//     });
// });


// const scroller = new LocomotiveScroll({
//     el: document.querySelector('[data-scroll-container]'),
//     smooth: true
// });









"use strict";
document.addEventListener('DOMContentLoaded', function() {
    // Activate only if not already activated
    if (window.hideYTActivated) return;
    // Activate on all players
    let onYouTubeIframeAPIReadyCallbacks = [];
    for (let playerWrap of document.querySelectorAll(".video_wrapper")) {
        let playerFrame = playerWrap.querySelector("iframe");

        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let onPlayerStateChange = function(event) {
            if (event.data == YT.PlayerState.ENDED) {
                playerWrap.classList.add("ended");
            } else if (event.data == YT.PlayerState.PAUSED) {
                playerWrap.classList.add("paused");
            } else if (event.data == YT.PlayerState.PLAYING) {
                playerWrap.classList.remove("ended");
                playerWrap.classList.remove("paused");
            }
        };

        let player;
        onYouTubeIframeAPIReadyCallbacks.push(function() {
            player = new YT.Player(playerFrame, {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        });

        playerWrap.addEventListener("click", function() {
            let playerState = player.getPlayerState();
            if (playerState == YT.PlayerState.ENDED) {
                player.seekTo(0);
            } else if (playerState == YT.PlayerState.PAUSED) {
                player.playVideo();
            }
        });
    }

    window.onYouTubeIframeAPIReady = function() {
        for (let callback of onYouTubeIframeAPIReadyCallbacks) {
            callback();
        }
    };

    window.hideYTActivated = true;
});