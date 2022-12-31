<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>LightFly</title>
    <? include 'downloads/php/social-media-links.php' ?>
    <? include 'downloads/php/social-media-icons.php' ?>
    
    <!-- <script type="text/javascript">
            window.location.href = "404.php"
    </script> -->
</head>


<!-- Styles ---------------------------------------------------------------------------------->
<style>
    body {
        background-color: #0C0D0F;
    }

    h1 {
        color: white;
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

<div class="four04">
    <img src="img/partyparrot.gif" class="parrot" alt="">
    <h1>404 page not found.</h1>
</div>

</body>
</html>