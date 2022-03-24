jQuery(document).ready(function($){
    $(function () {
        var video = document.getElementsByTagName("video")[0];
        video.addEventListener('play', function (e) {
            if (this.className.indexOf('MyClass') == -1)
                this.className += " MyClass";
        });
        $('video').on('ended',function(){ $(this).hide(); });
        $('video').on('ended',function(){
            $('.baner_title').addClass('blue_text');
            $('.baner_text').addClass('blue_text');
            $('.baner_subtitle').addClass('blue_text');
            $('.second_button').addClass('show_replay');
        });
        $('video').on('play',function(){
            $('.baner_title').removeClass('blue_text');
            $('.baner_text').removeClass('blue_text');
            $('.baner_subtitle').removeClass('blue_text');
            $('.second_button').removeClass('show_replay');
        });
        $('#myBtn').click(function(){
            $('#myVideo').show();
        });
    });
});



var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        btn.innerHTML = "Replay video";
    } else {
        video.pause();
        btn.innerHTML = "Replay video";
    }
}


jQuery(document).ready(function($){
    $('.video_item').parent().click(function () {
        if($(this).children(".video_item").get(0).paused){$(this).children(".video_item").get(0).play();   $(this).children(".playpause").fadeOut();
        }else{       $(this).children(".video_item").get(0).pause();
            $(this).children(".playpause").fadeIn();
        }
    });
});