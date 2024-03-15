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
    <link rel="stylesheet" href="../../css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    <link rel="stylesheet" href="../../css/media-queries.css">
    <script src="../../js/search.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="5cc3eee291c58649" />
    <meta name="viewport" content="width=device-width">
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
    <? include 'downloads/header.php' ?>
</head>


<!-- Styles ---------------------------------------------------------------------------------->
<style>
    body {
        user-select: none;
    }

    .four04 {
        padding-top: 150px;
        margin: auto;
        display: grid;
        align-items: center;
        justify-content: center;
    }

    .parrot {
        width: 200px;
        margin: auto;
        align-items: center;
        justify-content: center;
    }
</style>
<!-- Body ---------------------------------------------------------------------------------->
<body>

<div class="four04">
    <img src="/img/partyparrot.gif" class="parrot" alt="">
    <h1 id="four-o-four">404 page not found.</h1>
    <a id="four-o-four" href="/">Home Page</a>
</div>

</body>
</html>