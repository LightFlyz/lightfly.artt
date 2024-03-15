<?php

function get_tunes() {
    global $link;
    $sql = "SELECT * FROM tunes";
    $result = mysqli_query($link, $sql);
    $music = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $music; 
}

function get_assets() {
    global $link;
    $sql = "SELECT * FROM assets";
    $result_asset = mysqli_query($link, $sql);
    $asset = mysqli_fetch_all($result_asset, MYSQLI_ASSOC);
    return $asset; 
}
