<?php
require_once '..//includes/database.php';
require_once '..//includes/functions.php';
// require_once '..//includes/tests.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../../css/media-queries.css">
    <script src="../../js/search.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5cc3eee291c58649" />
    <meta name="viewport" content="width=device-width">
    <title>LightFly - Songs</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/favicon.ico">
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

    <!-- some testing shit -->
        <? //echo $some_php_tests; ?>
    <!-- Tunes -->
        <div class="songs-box">
            <ul id="myUL">
            <pre>
            <?
            $asset = get_assets();
            print_r($asset);

            $music = get_tunes();
            print_r($music);
            ?>
            </pre>
            
            <?$music[0]['title'];

                $i = 1;
                while($i <= 6){
                    echo '<li><p>while '.$i.'</p></li>';
                    $i++;
                }

                echo '<hr>';

                $g = 1;
                do{
                    echo '<li><p>do_while '.$g.'</p></li>';
                    $g++;
                }
                while($g <= 6);

                echo '<hr>';

                for($k = 1; $k <= 6; $k++){
                    echo '<li><p>for '.$k.'</p></li>';
                }

                echo '<hr>';

                for($l = 1, $count = count($music); $l <= $count; $l++){
                    echo '<li><p>for + count $music '.$l.'</p></li>';
                }
            ?>

            <pre>
            <?
            echo '<hr>';
            foreach($music as $music1){
                echo '<li><p>'.$music1['title'].' by '.$music1['artist'].'</p></li>';
            }
            ?>
            </pre>

            <?php
            include '..//includes/song_block.php';
            echo $initial;
            //$files = glob("songs/assets/songsPhp/*.php");
            //$files = array_reverse($files);
            //foreach ($files as $songname) {
            //    include $songname;
            //}
            ?>
            </ul>
        </div>
</div>
</body>
</html>