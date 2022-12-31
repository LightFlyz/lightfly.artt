<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>LightFly</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/favicon.ico">
    <? include '../php/social-media-links.php' ?>
    <? include '../php/social-media-icons.php' ?>
</head>


<!-- Styles ---------------------------------------------------------------------------------->
<style>
    body {
        background-color: #0C0D0F;
    }
</style>
<!-- Header --------------------------------------------------------------------------------->
<header> 
    <div class=header>
    <a href="../../lightfly"><img src="../../img\header\White logo.svg" class="header-logo"></a>

    <div class=header-icons>
        <?
        echo '<a href="'.$youtube.'"><img src="'.$iconYoutube.'" class="header-social-icon"></a>';
        echo '<a href="'.$instagram.'"><img src="'.$iconInstagram.'" class="header-social-icon"></a>';
        echo '<a href="'.$github.'"><img src="'.$iconGithub.'" class="header-social-icon"></a>';
        echo '<a href="'.$facebook.'"><img src="'.$iconFacebook.'" class="header-social-icon"></a>';
        echo '<a href="'.$spotify.'"><img src="'.$iconSpotify.'" class="header-social-icon"></a>';
        echo '<a href="'.$discord.'"><img src="'.$iconDiscord.'" class="header-social-icon"></a>';
        echo '<a href="'.$twitch.'"><img src="'.$iconTwitch.'" class="header-social-icon"></a>';
        ?>
    </div>
</header>
<!-- Body ---------------------------------------------------------------------------------->
<body>

<div class=navigation>
<!-- ------------------------------------------------------------------------------------- -->
    <a href="../tunes">
        <div class=songs>
            <div id=nav-icon>
                <img src="../../img\navigation\tune.svg">
            </div>
            <div class=navigation-text>
                <p id=navigation-heading>Songs</p>
                <p id=navigation>Download wavs of my songs</p>
            </div>
        </div>
    </a>
<!-- ------------------------------------------------------------------------------------- -->
    <a href="../artworks">
        <div class=artworks>
            <div id=nav-icon>
                <img src="../../img\navigation\artworks.svg">
            </div>
            <div class=navigation-text>
                <p id=navigation-heading>Artworks</p>
                <p id=navigation>High quality artworks from my songs</p>
            </div>
        </div>
    </a>
<!-- ------------------------------------------------------------------------------------- -->
    <div class=misc-selected>
        <div id=nav-icon-selected>
            <img src="../../img\navigation\misc.svg">
        </div>
        <div class=navigation-text>
            <p id=navigation-selected-heading>Assets</p>
            <p id=navigation-selected>Miscellaneous assets</p>
        </div>
    </div>
</div>

</body>
</html>