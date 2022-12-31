<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>LightFly</title>
    <link rel="icon" type="image/x-icon" href="../../img/favicon/favicon.ico">
    <? include '../downloads/php/social-media-links.php' ?>
    <? include '../downloads/php/social-media-icons.php' ?>
</head>
<style>
        body {
            /* background-image: url(../img/background.png);
            background-attachment: fixed;
            background-size: cover; */
            background-color: #0C0D0F;
        }
</style>
<body>
    <div class="bbody">
    <div class="content">
        <div class="avatar">
            <img src="https://is1-ssl.mzstatic.com/image/thumb/AMCArtistImages123/v4/e3/e2/e1/e3e2e1b0-306c-8780-e4a6-7f6c5ffc7715/8b412078-3d3c-4347-9c86-3a48fcd5138c_ami-identity-11acc3956d6677349108c9267a5e7d26-2022-12-26T19-31-04.187Z_cropped.png/1000x1000bb.jpg" id="avatar">
        </div>

        <div class="name">
            <p class="name">Follow LightFly:</p>
        </div>

        <div class="links">
        <?
        echo '<a href="'.$youtube.'"><img src="'.$iconYoutube.'" class="follow-icon"></a>';
        echo '<a href="'.$instagram.'"><img src="'.$iconInstagram.'" class="follow-icon"></a>';
        echo '<a href="'.$github.'"><img src="'.$iconGithub.'" class="follow-icon"></a>';
        echo '<a href="'.$facebook.'"><img src="'.$iconFacebook.'" class="follow-icon"></a>';
        echo '<a href="'.$spotify.'"><img src="'.$iconSpotify.'" class="follow-icon"></a>';
        echo '<a href="'.$discord.'"><img src="'.$iconDiscord.'" class="follow-icon"></a>';
        echo '<a href="'.$twitch.'"><img src="'.$iconTwitch.'" class="follow-icon"></a>';
        ?>
        </div>

        <a class="follow-entrance" href="../downloads/tunes">Click here to download my music</a>

    </div>
    </div>
</body>
</html>