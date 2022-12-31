<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                <p class="heading">Login</p>
            </div>

            <form action="validation/auth.php" method="post">

                <div class="login">
                    <input type="text" class="login" name="login" placeholder="Login">
                    <input type="password" class="password" name="pass" placeholder="Password">

                    <div id="submit" class="save-btn">
                        <label>
                            <input type="submit" name="Login" id="submit" class="submit">
                            <span class="Button">Login</span>
                        </label>
                    </div>

                </div>

            </form>
            <a href="/register.php">reg page</a>
        </div>
    </div>
</body>
</html>