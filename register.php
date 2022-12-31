<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
        background: #fff;
        /* background-image: url(../img/background.png);
        background-attachment: fixed;
         background-size: cover; */
    }
</style>
<body>
    <div class="bbody">
        <div class="regPanel">
            <div class="name">
                <p class="heading">Register</p>
            </div>
            <form action="validation/check.php" method="post">
                <div class="login">
                    <input type="text" class="login" name="login" placeholder="Login">
                    <input type="password" class="password" name="pass" placeholder="Password">
                    <input type="password" class="password" name="confPass" placeholder="Confirm Password">
                    <div id="submit" class="save-btn">
                        <label>
                            <input type="submit" name="Register" id="submit" class="submit">
                            <span class="Button">Register</span>
                        </label>
                    </div>
                </div>
            </form>
            <a href="/login.php">login page</a>
        </div>
    </div>
</body>
</html>