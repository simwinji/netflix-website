<?php 

if(isset($_POST["submit"])){

   $username = FormSanitizer::sanitizerFormString($_POST["username"]);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Netflix | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!--- Favicon --->
    <link rel="icon" type="image/x-icon" href="img/favicon/netflix_logo_png_transparet.png">
    <!--- css-Library --->
    <link href="css/Sign-In.css" rel="stylesheet" type="text/css">
    <!--- JS Javascript --->
    <script src="js/javascript.js" rel="javascript" type="text/js"></script>
</head>

<body>
    <!--- navbar --->
    <div class="wrapper">
        <div class="header">
            <div class="nav">
                <a href="../Netflix-Clone-Website/Index.html"><img src="img/logo/netflix-logo.png" class="nav_logo" alt="logo" /></a>
            </div>
        </div>
    </div>
    <!--- Form --->
    <div class="login_body">
        <div class="login_box">
            <h2>Sign Up</h2>
            <div class="input_wrap">
                <input type="text" name="username" id="username" placeholder="Username" maxlength="10" required>
            </div>
            <div class="input_wrap">
                <input type="email" name="email" id="email" placeholder="Example@gmail.com" maxlength="10" required>
            </div>
            <div class="input_wrap">
                <input type="password" name="password" id="password" placeholder="Password" maxlength="10" required>
            </div>
            <div class="input_wrap">
                <input type="password" name="password2" id="password2" placeholder="Confirm Password" maxlength="10">
            </div>
            <div class="input_wrap">
                <a href="../Netflix-Clone-Website/Browse.html"><button>Sign In</button></a>
            </div>
            <div class="help">
                <div>
                    <input value="true" type="checkbox"><label>Remember me</label>
                </div>
                <a href="https://www.netflix.com/dz-en/LoginHelp">Need Help ?</a>
            </div>
            </form>
        </div>
        <div class="signup">
            <p>I Already have an Account ?</p>
            <a href="login.html">Login</a>
        </div>
        <div class="more">
            <p>This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a></p>
        </div>
    </div>
    <section class="footer">
        <div class="content">
            <ul class="items">
                <li><a href="#">Questions? Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Cookie Preferences</a></li>
            </ul>

            <ul class="items">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Corporate Information</a></li>
            </ul>

            <ul class="items">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Ways to Watch</a></li>
            </ul>

            <ul class="items">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </section>
</body>

</html>
