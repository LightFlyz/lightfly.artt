<?
require_once 'includes/start.php';
include 'downloads/php/social-media-links.php';
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

    <div class="home-bio" style="height: 100%; padding-top: 70px;">
        <div class="bio-texts" style="height: 100%;">
            <div id="bio-title">
                <p style="margin: 0px">About this site</p>
            </div>
            <div id="bio-biography" style="height: 100%;">
                <p style="margin: 0px">Initially the development started just for fun. It later became LightFly's university project. It is now a website that provides downloads of his music, artwork and miscellaneous assets.</p>
                <!-- <p style="margin: 0px">He has been making music since February 2018. Started making music under influence of Alan Walker, K-391, Marshmello, Porter Robinson, Di Young and many others!</p>
                <p style="margin: 0px">Absolutely hates to classify his music by genre, because he does literally anything that makes him emotional. And more often than not, he combines multiple genres into one, so it's pretty hard to tell what his music is all about.</p>
                <p style="margin: 0px">His single "Love You" was supported by UXN.</p> -->
            </div>
        </div>
    </div>

<hr class="home-hr" >

<!-- popular releases --------------------------------------------------------------------------------->

    <div class="home-bio" style="height: 100%;">
        <div class="bio-texts" style="height: 100%;">
            <div id="bio-title">
                <p style="margin: 0px">Credits</p>
            </div>
            <div id="bio-biography" style="height: 100%;">
                <p style="margin: 0px">
                UX/UI - LightFly<br>
                Front-end development - LightFly<br>
                Back-end development - LightFly & <a class="styled-link" href="https://github.com/levovix0/">levovix</a><br>
                Stream & Download gates - <a class="styled-link" href="https://github.com/levovix0/">levovix</a>
                </p>
                <!-- <p style="margin: 0px"></p> -->
                <!-- <p style="margin: 0px"></p> -->
                <!-- <p style="margin: 0px"></p> -->
            </div>
        </div>
    </div>

<hr class="home-hr" >

<!-- biography --------------------------------------------------------------------------------->

    <div class="home-bio" style="height: 100%;">
        <div class="bio-texts" style="height: 100%;">
            <div id="bio-title">
                <p style="margin: 0px">Special thanks</p>
            </div>
            <div id="bio-biography" style="height: 100%;">
                <p style="margin: 0px">
                to all my friends for all the feedback they gave me about the site<br>
                to the people who made the icons (I don't know who they are because I found all the icons in the "<a class="styled-link" href="https://www.figma.com/community/plugin/735098390272716381/iconify">iconify</a>" plugin in <a class="styled-link" href="https://www.figma.com/">Figma</a>) <br>
                to <a class="styled-link" href="https://github.com/levovix0/">levovix</a> for helping me with the back-end and gate pages
                </p>
                <!-- <p style="margin: 0px"></p> -->
                <!-- <p style="margin: 0px"></p> -->
                <!-- <p style="margin: 0px"></p> -->
            </div>
        </div>
    </div>

<hr class="home-hr" >

<!-- footer --------------------------------------------------------------------------------->

<? require_once 'includes/footer.php'; ?>