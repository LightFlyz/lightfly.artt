<?php

$filename = "../covers/".$_GET['artwork'];
$newWidth = 0 + $_GET['width'];
$newHeight = 0 + $_GET['height'];
$img = shell_exec('convert '.$filename.' -resize '.$newWidth.'x'.$newHeight.' -');
header('Content-Type: image/png'); 
echo $img;
