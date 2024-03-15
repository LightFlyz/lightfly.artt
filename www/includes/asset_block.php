<?php

$title = $asset['title'];
$thumbnail = $asset['thumbnail'];
$download = $asset['download'];

$initial =
        '
        <li class="assets">
                <div class="assets-block">
                    <div class="assets-img">
                        <img src="../thumbnails/'.$thumbnail.'" alt="">
                    </div>
                    <div id="asset-title">
                        <p1>'.$title.'</p1>
                    </div>
                    <div class="asset-download">
                        <a href="../downloads/assets/'.$download.'" id="download" download>
                        <div class="download-button" style="margin: auto;">
                            <img src="../../img/download.svg" alt="">
                            <p style="padding-bottom: 5px;">Download</p>
                        </div>
                        </a>
                    </div>
                </div>
                </li>
        ';