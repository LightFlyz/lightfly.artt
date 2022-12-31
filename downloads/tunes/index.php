<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>LightFly</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/favicon.ico">
    <?
    include '../php/social-media-links.php';
    include '../php/social-media-icons.php';
    include 'tune-type.php';
    include 'tunes.php';
    ?>
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
    </div>
</header>
<!-- Body ---------------------------------------------------------------------------------->
<body>

<!-- Navigation -->

 <div class=navigation>
 <!-- Tunes ------------------------------------------------------------------------------------- -->
    <div class=songs-selected>
        <div id=nav-icon-selected>
            <img src="../../img\navigation\tune.svg">
        </div>
        <div class=navigation-text>
            <p id=navigation-selected-heading>Songs</p>
            <p id=navigation-selected>Download wavs of my songs</p>
        </div>
    </div>
 <!-- Arts ------------------------------------------------------------------------------------- -->
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
 <!-- Misc Assets ------------------------------------------------------------------------------------- -->
    <a href="../misc">
        <div class=misc>
            <div id=nav-icon>
                <img src="../../img\navigation\misc.svg">
            </div>
            <div class=navigation-text>
                <p id=navigation-heading>Assets</p>
                <p id=navigation>Miscellaneous assets</p>
            </div>
        </div>
    </a>
 </div>

<!-- Search -->

 <div class="search">
    <input type="text" placeholder="Search for one of my fucking tunes!" class="search">
 </div>

<!-- Tunes -->

    <div class="songs-box">
        <?
        echo "$i_really_wanna_stay_at_your_house";
        echo "$waiting_remix";
        echo "$waiting";
        echo "$sunrise";
        echo "$free_fall"; 
        echo "$electroxmas"; 
        echo "$stay_home"; 
        echo "$live_at_night"; 
        echo "$just_stay"; 
        ?>
    </div>


</body>
</html>