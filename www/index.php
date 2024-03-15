<?
require_once 'includes/start.php';
include '/downloads/php/social-media-links.php';
?>
<!-- Header --------------------------------------------------------------------------------->

<div class="wrapper">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            function slowScroll(id) {
                $('html, body').animate({
                    scrollTop: $(id).offset().top
                }, 500);
            }

            $(document).on("scroll", function () {
            var $header = $(".header-fixed-bg");

            if ($(window).scrollTop() === 0) {
                $header.removeClass("absolutely-fixed");
                $header.attr("id", "header-null-color");
            } else {
                $header.addClass("absolutely-fixed");
                $header.removeAttr("id");
            }
            }); 
    </script>
    <style>
        body {
            margin: 0px;
        }
    </style>

<script src="../js/theme-switch.js"></script>

    <!-- latest release --------------------------------------------------------------------------------->

    <div class="latest-release" id="scroll-home" style="display: none;">
        <div class="latest-artwork">
            <img class="latest-artwork" src="/covers/love_you_remakes.png" alt="">
        </div>
        <div class="latest-texts">
            <p id="latest-heading">Latest release</p>
            <p id="heading-home">Love You - Remakes</p>
            <p id="latest-desc">
                Love You is LightFly's favorite song he has ever made. 
                In the process of working on the original song he recorded distorted electric guitar, that later became the foundation of the Rock Version of the song. This EP also includes sped-up and slowed versions of the song.
            </p>
            <div class="latests-btns" >
                <a href="<?//PUT THE LINK HERE?>" id="download">
                    <div class="stream-button-wide">
                        <img src="../../img/stream.svg" alt="">
                        <p>Stream on all platforms</p>
                    </div>
                </a>
                <a href="/downloads/tunes" id="download">
                    <div class="download-button-home">
                        <img src="../../img/download.svg" alt="">
                        <p>Download</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <hr class="home-hr" style="display: none;">

    <!-- popular releases --------------------------------------------------------------------------------->

    <div class="popular-releases-title" style="padding-top: 70px;">
        <p id="popular-releases-title">Popular Releases</p>
    </div>
    <div class="popular-releases">
        <div id="popular-song">
            <div id="popular-song-art">
                <img src="https://lightfly.art/includes/image_resizer.php?artwork=love_you.png&width=250&height=250" alt="" id="popular-song-art">
            </div>
            <div id="popular-song-text">
                <p id="popular-song-title">Love You</p>
                <p id="popular-song-artist">LightFly</p>
            </div>
            <a href="https://hypeddit.com/sp0at7" id="download">
                <div class="stream-button-wide">
                    <img src="../../img/stream.svg" alt="">
                    <p>Stream on all platforms</p>
                </div>
            </a>
        </div>
        <div id="popular-song">
            <div id="popular-song-art">
                <img src="https://lightfly.art/includes/image_resizer.php?artwork=chasing_stars.png&width=250&height=250" alt="" id="popular-song-art">
            </div>
            <div id="popular-song-text">
                <p id="popular-song-title">Chasing Stars</p>
                <p id="popular-song-artist">LightFly</p>
            </div>
            <a href="https://hypeddit.com/p3bwlg" id="download">
                <div class="stream-button-wide">
                    <img src="../../img/stream.svg" alt="">
                    <p>Stream on all platforms</p>
                </div>
            </a>
        </div>
        <div id="popular-song">
            <div id="popular-song-art">
                <img src="https://lightfly.art/includes/image_resizer.php?artwork=once_more.png&width=250&height=250" alt="" id="popular-song-art">
            </div>
            <div id="popular-song-text">
                <p id="popular-song-title">Once More</p>
                <p id="popular-song-artist">LightFly</p>
            </div>
            <a href="https://hypeddit.com/gxin3h" id="download">
                <div class="stream-button-wide">
                    <img src="../../img/stream.svg" alt="">
                    <p id="scroll-about">Stream on all platforms</p>
                </div>
            </a>
        </div>
    </div>

    <hr class="home-hr" >

    <!-- biography --------------------------------------------------------------------------------->

    <div class="home-bio">
        <div class="bio-texts">
            <div id="bio-title">
                <p style="margin: 0px">LightFly / LightFlyzzz</p>
            </div>
            <div id="bio-biography">
                <p style="margin: 0px">Nikita Vasilyev, better known as LightFly. An independent music producer.</p>
                <p style="margin: 0px">He has been making music since February 2018. Started making music under influence of Alan Walker, K-391, Marshmello, Porter Robinson, Di Young and many others!</p>
                <p style="margin: 0px">Absolutely hates to classify his music by genre, because he does literally anything that makes him emotional. And more often than not, he combines multiple genres into one, so it's pretty hard to tell what his music is all about.</p>
                <p style="margin: 0px">His single "Love You" was supported by UXN.</p>
            </div>
        </div>
        <div id="bio-image">
            <img src="/img/photos/me.png" alt="" id="bio-image">
        </div>
    </div>

    <hr class="home-hr" id="scroll-links">

    <!-- footer --------------------------------------------------------------------------------->


<? require_once 'includes/footer.php'; ?>