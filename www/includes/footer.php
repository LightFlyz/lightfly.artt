<div class="home-footer">
    <div class="home-footer-column">
        <div id="home-footer-title">
            <p>Socal Media</p>
        </div>
        <div id="home-footer-links">
            <a href="<?echo $youtube?>">YouTube</a>
            <a href="<?echo $instagram?>">Instagram</a>
            <a href="<?echo $spotify?>">Spotify</a>
            <a href="<?echo $apple_music?>">Apple Music</a>
            <a href="<?echo $soundcloud?>">SoundCloud</a>
            <a href="<?echo $newgrounds?>">Newgrounds</a>
            <a href="<?echo $discord?>">Discord</a>
        </div>
    </div>
    <div class="home-footer-column">
        <div id="home-footer-title">
            <p>Download</p>
        </div>
        <div id="home-footer-links">
            <a href="/downloads/tunes">Music</a>
            <a href="/downloads/artworks">Artworks</a>
            <a href="/downloads/misc">Assets</a>
        </div>
    </div>
    <div class="home-footer-column">
        <div id="home-footer-title">
            <p>About Site</p>
        </div>
        <div id="home-footer-links">
            <a href="/credits">Credits</a>
            <a id="fake-redirect" href="https://github.com/LightFlyz/lightfly.art">GitHub</a>
        </div>
        <script>
            var btn1 = document.getElementById("fake-redirect");
            btn1.addEventListener("click", function (a) { 
                location.href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"; 
                // return: false;
                a.preventDefault();
            });
        </script>
    </div>
</div>
</div>