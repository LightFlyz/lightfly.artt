<?php
    if($_COOKIE['user'] !== ''):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LightFly</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
        background: #FFF;
        /* background-image: url(../img/background.png);
        background-attachment: fixed;
         background-size: cover; */
    }
</style>
<body>

    

    <div class="bbody">
        <div class="SetUpPanel">

            <div class="name">
                <p class="heading">Set Up Your Follow Link</p>
            </div>

            <div class="description">
                <center>
                <p class="hello">Hello, <?=$_COOKIE['user']?> <a href="validation/exit.php">Logout</a></p> 
                <p class="descriptionTxt">Set Your Follow Link: profile image, Name, page design and follow links</p>
                </center>
            </div>

            <div class="User">
                <div class="avatarPreview">
                    <img id="avatarPreview" class="uploaded-img" src="">
                    <img id="avatarPreview" src="img\system\UnknownAvatar.png">
                    
                    <!-- <img src="" alt="" class="uploaded-img"> -->
                </div>

                <div class="userInfo">

<!-- User name input -------------------------------------------------------- -->

                    <div class="userName">
                        <p class="userName">Name</p>
                        <input type="text" class="userName" placeholder="">
                    </div>

<!-- User background input -------------------------------------------------------- -->

                    <div class="userBg">
                        <p class="userBg">Background</p>

                        <div id="file-upload">
                            <label>
                                <input type="file" name="bg" id="file-upload">
                                <span class="Button">Choose file</span>
                            </label>
                        </div>
                    </div>

<!-- User avatar input -------------------------------------------------------- -->

                    <div class="userAvatar">
                        <p class="userAvatar">Avatar</p>

                        <div id="file-upload" class="file-upload-btn">
                            <label>
                                <input type="file" name="bg" id="file-upload" class="file-upload">
                                <span class="Button">Choose file</span>
                            </label>
                        </div>

                        <img src="" alt="" class="uploaded-img">
                    </div>

                    <script type="text/javascript">
                        let uploadInput = document.querySelector('.file-upload'),
                            uploadBtn = document.querySelector('.file-upload-btn'),
                            uploadImage = document.querySelector('.uploaded-img');

                        uploadBtn.onclick = function() {
                            uploadInput.click();
                        }
                        
                        uploadInput.onchange = function () {
                            getImageData();
                        }

                        function getImageData() {
                            let files = uploadInput.files[0];

                            if (files) {
                                let fileReader = new FileReader();

                                fileReader.readAsDataURL(files);

                                fileReader.onload = function () {
                                    uploadImage.classList.add('active');
                                    uploadImage.src = this.result;
                                }
                            }
                        }
                        
                    </script>



                </div>

            </div>
            <div class="Links">
                <div class="youtube">
                        <img src="img/links/youtube.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://www.youtube.com/c/">
                </div>
                <div class="insta">
                        <img src="img/links/instagram.png" id="logo">
                        <input type="text"  class="linkBox" placeholder="https://instagram.com/">
                </div>
                <div class="github">
                        <img src="img/links/github.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://github.com/">
                </div>
                <div class="facebook">
                        <img src="img/links/facebook.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://www.facebook.com/">
                </div>
                <div class="spotify">
                        <img src="img/links/spotify.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://open.spotify.com/artist/">
                </div>
                <div class="vk">
                        <img src="img/links/vk.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://vk.com/">
                </div>
                <div class="twitch">
                        <img src="img/links/twitch.png" id="logo">
                        <input type="text" class="linkBox" placeholder="https://twitch.tv/">
                </div>
            </div>
            <div id="submit" class="save-btn">
                <label>
                    <input type="submit" name="save" id="submit" class="submit">
                    <span class="Button">Save</span>
                </label>
            </div>
        </div>
    </div>
</body>
</html>

<?php else: echo "login err" ?>

<?php
endif;
?>