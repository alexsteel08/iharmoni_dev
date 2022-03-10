<section class="baner" <?php if( get_sub_field('baner_bi') ): ?> style="background-image: url(<?php the_sub_field('baner_bi'); ?>)"<?php endif; ?>>
    <video autoplay muted id="myVideo" poster="/wp-content/uploads/2022/03/loader-min.jpeg">
        <source src="<?php $file = get_sub_field('video_bg'); if( $file ): ?><?php echo $file['url']; ?><?php endif; ?>" >

    </video>
<!--    <div class="video_content">-->
<!--        <button id="myBtn" onclick="myFunction()">Pause</button>-->
<!--    </div>-->
    <div class="baner_block content_width">
        <div class="baner_top"></div>
        <div class="baner_right"></div>
        <div class="baner_left"></div>
        <div class="baner_bottom"></div>
        <div class="baner_content">
            <div class="baner_fields">
                <?php if( get_sub_field('baner_title') ): ?>
                    <div id="baner_title" class="baner_title" data-aos="fade-up" data-aos-once="true" data-aos-delay="300" data-aos-offset="0">
                        <?php the_sub_field('baner_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('baner_text') ): ?>
                    <div class="baner_text" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                        <?php the_sub_field('baner_text'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_sub_field('baner_subtitle') ): ?>
                    <div class="baner_subtitle" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
                        <?php the_sub_field('baner_subtitle'); ?>
                        <div id="timer" class="timer col">

                        </div>
                    </div>
                <?php endif; ?>

                <?php if( get_sub_field('baner_button_link') && get_sub_field('baner_button_text') ): ?>
                    <div class="baner_button" data-aos="fade-up" data-aos-delay="600" data-aos-offset="0">
                        <a href="<?php the_sub_field('baner_button_link'); ?>" rel="nofollow"><?php the_sub_field('baner_button_text'); ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <?php if( get_sub_field('second_button_link') && get_sub_field('second_button_text') ): ?>
                <div class="second_button" data-aos="fade-up" data-aos-delay="700" data-aos-offset="0">
                    <a id="myBtn" onclick="myFunction()" href="<?php the_sub_field('second_button_link'); ?>" rel="nofollow"><?php the_sub_field('second_button_text'); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="baner_jet parallax"></div>
</section>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?php if( get_sub_field('end_date') ): ?><?php the_sub_field('end_date'); ?><?php endif; ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("timer").innerHTML = "[" + days + ":" + hours + ":"
            + minutes + ":" + seconds + "]";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);





</script>