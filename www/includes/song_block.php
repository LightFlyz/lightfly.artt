<?php

// if($artist == 0 || $title == 0 || $date == 0 || $type == ""):{
    //     $artist = 'N/A';
    // };
    include 'tune-type.php';
    
    $title = $tune['title'];
    $artist = $tune['artist'];
    $date = date('M j, Y', strtotime($tune['date']));
    // $date = $tune['date'];
    $artwork = $tune['artwork'];
    $download = $tune['download'];
    $stream = $tune['stream'];
    $typeIn = $tune['type'];
    $typeOut = preg_split("/\,/", $typeIn); // possible types are $single $remix $ep $album
    $type = "";
    foreach($typeOut as $typeIn1){
        $typeIn2 = ucfirst($typeIn1); if($typeIn2 == "Ep"){$typeIn2 = "EP";}
        $type = $type.'<div id="'.$typeIn1.'">
        <p>'.$typeIn2.'</p>
        </div>';
    };
    
    
    $stream_status = 
    '<a href="'.$stream.'" id="download">
    <div class="stream-button">
        <img src="../../img/stream.svg" alt="">
        <p>Stream</p>
    </div>
    </a>';

    $status = '<a href="'.$download.'" id="download" download>
    <div class="download-button">
    <img src="../../img/download.svg" alt="">
    <p>Download</p>
    </div>
    </a>';
    
    if($stream == ""){$stream_status = '';}

    if($date == "Nov 30, -0001"){$date = "&macr;&bsol;&lowbar;&lpar;&#12484;&rpar;&lowbar;&sol;&macr;"; 
        $status = '<div class="download-button" style="background-color:#333036">
                    <img src="../../img/lock.svg" alt="">
                    <p>Soon</p>
                    </div>';
    }

$resized_art = "/includes/image_resizer.php?artwork=".$artwork."&width=200&height=200";

$initial =
    '<li><div class="tune">
    <div class="column-1">
    <img src="'.$resized_art.'" alt="'.$title.'" id="tune-artwork">
    <div id="tune-text">
    <p>'.$title.'</p>
    <p1>'.$artist.'</p1>
    </div>
    </div>
    
    <div class="column-1-1"></div>
    
    <div class="column-2">
    <div id="tune-date">
    <p1>'.$date.'</p1>
    </div>
            </div>

            <div class="column-3">'.$type.'</div>

            <div class="column-3-5">
            <div class="column-end">
            '.$stream_status.'
            '.$status.'
            </div>
        </div></li>';

