<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    body::-webkit-scrollbar {
        display: none;
    }
    @media only screen and (max-width: 450px) {
    .header {
        /* display: inline-block; */
        width: 537px;
    }
}
</style>
<body>
<div class="wrapper">
    <!-- Header --------------------------------------------------------------------------------->
    <header> 
        <div class=header>
        <a title="Home page" href="/"><img src="../../img\header\White logo.svg" class="header-logo"></a>

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
                <a href="/" class="global-nav-link">Home</a>
                <a href="/downloads/tunes" class="global-nav-link" id="gloabal-nav-selected">Downloads</a>
            </div>
        <div class="vert-line-header"></div>
        <div type="button" class="theme-button" title="Change Theme" id="theme-button" style="margin-left: 20px; margin-top: 10px">
            <img src="../img/header/theme/dark-mode.svg" class="dark-mode-icon" alt="">
            <img src="../img/header/theme/light-mode.svg" class="light-mode-icon" alt="">
        </div>
    </header>

    <script src="../js/theme-switch.js"></script>