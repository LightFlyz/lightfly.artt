<?php
   $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
   $confPass = filter_var(trim($_POST['confPass']), FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
       echo "invalid login length";
       exit();
   }   else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 1000) {
    echo "password must be at least 6 characters";
    exit();
   }    else if($pass != $confPass) {
    echo "passwords do not match";
    exit();
   }

   $pass = md5($pass."uerj7384t8icxzeop");

   $mysql = new mysqli('localhost', 'root', '', 'reg-bd');
   $mysql->query("INSERT INTO `users` (`login`, `password`) VALUES('$login', '$pass')");

   $mysql->close();

   header('Location: /register.php');
?>