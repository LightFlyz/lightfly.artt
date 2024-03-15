<?php
$link = mysqli_connect('localhost', 'root', '', 'lightfly_songs');
if(mysqli_connect_errno())
{
    echo 'connection error ('.mysqli_coonect_errno().'): '.mysqli_connect_error();
    exit();
}

?>