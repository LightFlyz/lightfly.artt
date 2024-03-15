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
    <meta name="yandex-verification" content="5cc3eee291c58649" />
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
    
    <!-- Navigation -->

    <div class=navigation>
    <!-- Tunes ------------------------------------------------------------------------------------- -->
        <div class="nav-block" id="selected">
            <div class="nav-icon" id="selected">
                <img src="../../img\navigation\tune.svg">
            </div>
            <div class=navigation-text>
                <p id=navigation-selected-heading>Songs</p>
                <p id=navigation-selected>Download wavs / 320kbps mp3s of my songs</p>
            </div>
        </div>
    <!-- Arts ------------------------------------------------------------------------------------- -->
        <a href="/downloads/artworks">
            <div class="nav-block">
                <div class="nav-icon">
                    <img src="../../img\navigation\artworks.svg">
                </div>
                <div class=navigation-text>
                    <p id=navigation-heading>Artworks</p>
                    <p id=navigation>High quality artworks from my songs</p>
                </div>
            </div>
        </a>
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

    <!-- Search -->

    <div class="search">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for one of my tunes" class="search">
    </div>
    <!-- Tunes -->
        <div class="songs-box">
            <ul id="myUL">
            <?
            $tunes = get_tunes();
            $tunes = array_reverse($tunes);
            foreach($tunes as $tune):
            include '..//includes/song_block.php';
            echo $initial;
            endforeach;
            ?>
            </ul>
        </div>

        <hr class="home-hr" >
        <? require_once '../includes/footer.php'; ?>
</div>
</body>
</html>