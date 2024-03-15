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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/universal.css">
    <link rel="stylesheet" href="../../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../../css/media-queries.css">
    <link rel="stylesheet" href="../../css/scrollbar-<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <script src="../../js/search.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5cc3eee291c58649" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <?
    include 'downloads/descriptions.php';
    echo $download_desc;
    ?>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/icon1.png">
    <?
    include 'downloads/php/social-media-links.php';
    include 'downloads/php/social-media-icons.php';
    include 'downloads/songs/tune-type.php';
    ?>
</head>
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    body::-webkit-scrollbar {
        display: none;
    }
    @media only screen and (max-width: 450px) {
    .wrapper {
        /* display: inline-block; */
        width: 620px;
        position: relative;
        /* border: 2px rgb(114, 80, 146) solid; */
        padding-left: 0px;
        padding-right: 0px;
        margin: auto;
    }
}
</style>
<body>

<header> 
    <div class="header-fixed-bg" id="header-null-color">
        <div class=header-fixed>
            <a href="/" onclick="slowScroll('#scroll-home')"><img src="../../img/header/White logo.svg" class="header-logo"></a>
                <!-- <div class="home-header-links">
                    <a href="#" class="home-header-link" onclick="slowScroll('#scroll-home')">Home</a>
                    <a href="/downloads/tunes" class="home-header-link1">Download music</a>
                    <a href="#" class="home-header-link" onclick="slowScroll('#scroll-about')">About</a>
                    <a href="#" class="home-header-link" onclick="slowScroll('#scroll-links')">Links</a>
                </div> -->
            <!-- <div class="vert-line-header"></div> -->
            
            <div style="flex-grow: 1;"></div>
            <div class=header-icons>
                <?php
                echo '<a href="'.$youtube.'"><img src="'.$iconYoutube.'" class="header-social-icon"></a>';
                echo '<a href="'.$instagram.'"><img src="'.$iconInstagram.'" class="header-social-icon"></a>';
                echo '<a href="'.$github.'"><img src="'.$iconGithub.'" class="header-social-icon"></a>';
                echo '<a href="'.$facebook.'"><img src="'.$iconFacebook.'" class="header-social-icon"></a>';
                echo '<a href="'.$spotify.'"><img src="'.$iconSpotify.'" class="header-social-icon"></a>';
                echo '<a href="'.$discord.'"><img src="'.$iconDiscord.'" class="header-social-icon"></a>';
                echo '<a href="'.$twitch.'"><img src="'.$iconTwitch.'" class="header-social-icon"></a>';
                echo '<a href="'.$tiktok.'"><img src="'.$iconTiktok.'" class="header-social-icon"></a>';
                ?>
            </div>
            <div class="vert-line-header" id="last-vert-line-header"></div>
            <div class="global-nav">
                <a href="/" class="global-nav-link" id="gloabal-nav-selected">Home</a>
                <a href="/downloads/tunes" class="global-nav-link">Downloads</a>
            </div>
            <div class="vert-line-header"></div>
            <div type="button" class="theme-button" title="Change Theme" id="theme-button" style="margin-left: 20px; margin-top: 10px">
            <img src="img/header/theme/dark-mode.svg" class="dark-mode-icon" alt="">
            <img src="img/header/theme/light-mode.svg" class="light-mode-icon" alt="">
            </div>
        </div>
    </div>
</header>