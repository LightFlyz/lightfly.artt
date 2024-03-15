<? 
    session_start();
    if($_SESSION["theme"] == "")
    {
        $_SESSION["theme"] = "dark";
    }

require_once 'includes/database.php';
require_once 'includes/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../css/media-queries.css">
    <script src="../js/search.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5cc3eee291c58649" />
    <meta name="viewport" content="width=device-width">
    <?
    include 'downloads/php/social-media-links.php';
    include 'downloads/php/social-media-icons.php';
    include 'downloads/songs/tune-type.php';
    // include 'songs/songs.php';
    include 'downloads/covers/covers.php';  
    ?>
</head>
    <? include 'downloads/header.php' ?>
    
    <!-- Navigation -->

    <div class=navigation>

    <!-- Tunes ------------------------------------------------------------------------------------- -->
        <div class="nav-block" id="">
            <div class="nav-icon" id="">
                <img src="../img\navigation\back.svg">
            </div>
            <div class=navigation-text>
                <p id=navigation-heading>Get back to downloads</p>
                <!-- <p id=navigation>Download wavs / 320kbps mp3s of my songs</p> -->
            </div>
        </div>
    </div>
<?
    // <!-- Tunes ------------------------------------------------------------------------------------- -->
    //     <div class="nav-block" id="selected">
    //         <div class="nav-icon" id="selected">
    //             <img src="../img\navigation\tune.svg">
    //         </div>
    //         <div class=navigation-text>
    //             <p id=navigation-selected-heading>Songs</p>
    //             <p id=navigation-selected>Download wavs / 320kbps mp3s of my songs</p>
    //         </div>
    //     </div>
    // <!-- Arts ------------------------------------------------------------------------------------- -->
    //     <a href="/downloads/artworks">
    //         <div class="nav-block">
    //             <div class="nav-icon">
    //                 <img src="../img\navigation\artworks.svg">
    //             </div>
    //             <div class=navigation-text>
    //                 <p id=navigation-heading>Artworks</p>
    //                 <p id=navigation>High quality artworks from my songs</p>
    //             </div>
    //         </div>
    //     </a>
    // <!-- Misc Assets ------------------------------------------------------------------------------------- -->
    //     <a href="/downloads/misc">
    //         <div class="nav-block">
    //             <div class="nav-icon">
    //                 <img src="../img\navigation\misc.svg">
    //             </div>
    //             <div class=navigation-text>
    //                 <p id=navigation-heading>Assets</p>
    //                 <p id=navigation>Miscellaneous assets</p>
    //             </div>
    //         </div>
    //     </a>
    // </div>
?>

<div class="about-box">
    <!-- ABOUT LIGHTFLY -->
    <div class="about-lightfly">
        <p class="about-block-heading">About LightFly</p>
        <p class="about-block-content">
            Nikita Vasilyev, better known as LightFly. An independent music producer.
            <br><br>
            He has been making music since February 2018. Started making music under influence of Alan Walker, K-391, Marshmello, Porter Robinson, Di Young and many others!
            <br><br>
            Absolutely hates to classify his music by genre, because he does literally anything that makes him emotional. And more often than not, he combines multiple genres into one, so it's pretty hard to tell what his music is all about.
            <br><br>
            His single "Love You" was supported by UXN.
        </p>
    </div>
    <div class="about-lightfly-img">
        <img src="img/about/me.png" alt="" class="about-lightfly-img">
    </div>

    <!-- Q & A -->
    <div class="about-qna-img">
        <img src="img/about/qna.png" alt="" class="about-qna-img">
    </div>
    <div class="about-qna">
        <p class="about-block-heading">Frequently asked question from YouTube comments</p>
        <p class="about-block-content">
            Q: Who is singing in your songs?<br>
            A: I don't know. Usually it's acapellas from Splice
            <br><br>
            Q: Is your music copyright free?<br>
            A: Yes it is! All of my songs being published under creative common license
            <br><br>
            Q: What VSTs do you use?<br>
            A: I use Serum, Nexus, Avenger, Sylenth1, Quanta, Kontakt
            <br><br>
            Q: Can I get free flp of your song Waiting?<br>
            A: No. I won't share it  
            <br><br>
            Q: Why did you switched to Ableton?<br>
            A: I find it more suitable to my workflow
            <br><br>
            Q: Will you make FL Studio tutorials?<br>
            A: I think no, I don't have FL Studio license any longer, and I don't want to get strike form Image-Line
        </p>
    </div>

    <!-- ADDITIONAL -->
    <div class="about-add">
        <p class="about-block-heading">Some additional things you may find interesting...</p>
        <p class="about-block-content">
            The specs of my computer are:<br>
            CPU - Intel i5 9400f<br>
            GPU - RTX 2060 Super<br>
            RAM - 48gb DDR4<br>
            SSD - Western Digital 1tb (WDS100T3B0E)<br>
            SSD 2 - Kingston 240gb (SA400S37/240G)<br>
            HDD - Western Digital 1tb (WD10EZEX)<br>
            HDD 2 - Western Digital 3tb (WD30EZRZ)<br>
            <br><br>
            Things that help me make music:<br>
            Ableton Live 11 Suite<br>
            Arturia MiniLab mkII<br>
            Ibanez SA260 AMBER BURST<br>
            And some coffee :D<br>
            <br><br>
            My favorite tunes I've ever made:<br>
            1. Love You<br>
            2. Chasing Stars<br>
            3. Once More<br>
        </p>
    </div>
    <div class="about-add-img">
        <img src="img/about/add.png" alt="" class="about-add-img">
    </div>

</div>
</body>
</html>