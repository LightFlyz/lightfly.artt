<?php

// if($artist == 0 || $title == 0 || $date == 0 || $type == ""):{
    //     $artist = 'N/A';
    // };
    include 'tune-type.php';
    
    $skip_art = 0;

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
        if(array_search($artwork, $art_array) !== false){
            $skip_art = 1;
            continue;
        }
        $art_array[] = $artwork;
        // print_r($art_array);
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

$resized_art = "/includes/image_resizer.php?artwork=".$artwork."&width=400&height=400";

$cover =
    '<div id="artwork-single">
        <a href="../covers/'.$artwork.'">
            <img id="artwork-img" src="'.$resized_art.'" alt="'.$artwork.'"> 
        </a>  
    </div>';

if($skip_art){
    $cover = "";
}