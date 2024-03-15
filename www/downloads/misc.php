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
    include 'php/social-media-links.php';
    include 'php/social-media-icons.php';
    include 'songs/tune-type.php';
    // include 'songs/assets/songs.php';
    include 'covers/covers.php'; 
    include 'descriptions.php'; echo $download_desc; 
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
                    <div class="nav-block" id="selected">
                        <div class="nav-icon" id="selected">
                            <img src="../../img\navigation\misc.svg">
                        </div>
                        <div class=navigation-text>
                            <p id=navigation-selected-heading>Assets</p>
                            <p id=navigation-selected>Miscellaneous assets</p>
                        </div>
                    </div>
    </div>
    
    <!-- Search -->

    <div class="search">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for assets" class="search">
    </div>

    <!-- Tunes -->
        <div class="assets-box">
            <ul id="myUL" class="assets">
                <?php
                $assets = get_assets();
                $assets = array_reverse($assets);
                foreach($assets as $asset):
                include '..//includes/asset_block.php';
                echo $initial;
                endforeach;
                // $files = glob("assets/assetsPhp/*.php");
                // $files = array_reverse($files);
                // foreach ($files as $asset) {
                //     include $asset;
                // }
                ?>
                <!-- <li class="assets-empty"></li> -->
                <!-- <li class="assets-empty"></li> -->
            </ul>
        </div>

        <hr class="home-hr" >
        <? require_once '../includes/footer.php'; ?>
</div>
</body>
</html>