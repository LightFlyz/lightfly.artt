<?php
setcookie('user', $user['login'], time() - 3600 * 24, "/login.php");
header('Location: /login.php');
?>