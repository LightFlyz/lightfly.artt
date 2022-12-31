<?php
   $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    

   $pass = md5($pass."uerj7384t8icxzeop");

   $mysql = new mysqli('localhost', 'root', '', 'reg-bd');
   $result = $mysql->query("SELECT * FROM `USERS` WHERE `login` = '$login' AND `password` = '$pass'");
   $user = $result->fetch_assoc();
   if(count($user) == 0) {
       echo "this user does not found";
       exit();
   }

   setcookie('user', $user['login'], time() + 3600 * 24, "/panel.php");

// TODO: remove it when you will load it on the server
//    print_r($user);
//    exit();

   $mysql->close();

   header('Location: /panel.php');
?>


// TODO window txt, 