<? 
    session_start();
    if($_SESSION["theme"] == "")
    {
        $_SESSION["theme"] = "dark";
    }

require_once '..//includes/database.php';
require_once '..//includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../../css/media-queries.css">
    <link rel="stylesheet" href="../../css/scrollbar-<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <script src="../../js/search.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?
    include 'descriptions.php';
    echo $download_desc;
    ?>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/icon1.png">
    <?
    include 'php/social-media-links.php';
    include 'php/social-media-icons.php';
    include 'songs/tune-type.php';
    // include 'songs/songs.php';
    include 'covers/covers.php';
    ?>
</head>

<? include 'header.php' ?>

    <!-- Body ---------------------------------------------------------------------------------->
    <body>

    <!-- Navigation -->

    <div class=navigation>
        <!-- Tunes ------------------------------------------------------------------------------------- -->
            <a href="/downloads/tunes">
            <div class="nav-block">
                <div class="nav-icon">
                    <img src="../../img\navigation\tune.svg">
                </div>
                <div class=navigation-text>
                    <p id=navigation-heading>Songs</p>
                    <p id=navigation>Download wavs / 320kbps mp3s of my songs</p>
                </div>
            </div>
            </a>
        <!-- Arts ------------------------------------------------------------------------------------- -->
            <div class="nav-block" id="selected">
                <div class="nav-icon" id="selected">
                    <img src="../../img\navigation\artworks.svg">
                </div>
                <div class=navigation-text>
                    <p id=navigation-selected-heading>Artworks</p>
                    <p id=navigation-selected>High quality artworks from my songs</p>
                </div>
            </div>
        <!-- Misc Assets ------------------------------------------------------------------------------------- -->
            <a href="/downloads/misc">
                <div class="nav-block">
                    <div class="nav-icon">
                        <img src="../../img\navigation\misc.svg">
                    </div>
                    <div class=navigation-text>
                        <p id=navigation-heading>Assets</p>
                        <p id=navigation>Miscellaneous assets</p>
                    </div>
                </div>
            </a>
    </div>
        

    <!-- Arts -->

        <div class="artwork-box">
            <? 
            $tunes = get_tunes();
            $tunes = array_reverse($tunes);
            $art_array = array();
            foreach($tunes as $tune):
            include '..//includes/art_block.php';
            echo $cover;
            endforeach;
          
            // echo "$love_you_remakes_art";
            // echo "$anxiety_art";
            // echo "$once_more_art";
            // echo "$chasing_stars_art";
            // echo "$love_you_art";
            // echo "$i_really_wanna_stay_at_your_house_art";
            // echo "$waiting_remix_art";
            // echo "$lonely_world_remix_art";
            // echo "$waiting_art";
            // echo "$sunrise_art";
            // echo "$free_fall_art"; 
            // echo "$electroxmas_art"; 
            // echo "$stay_home_art"; 
            // echo "$live_at_night_art"; 
            // echo "$just_stay_art";
            ?>
        </div>
        
        <hr class="home-hr" >
        <? require_once '../includes/footer.php'; ?>
</div>
</body>
</html>



