
<?php
        $host="localhost";
        $user="root";
        $password="";
        $db="demo"
?>


<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="loginstyling.css"/>
    <head><img src="loginbackground.png" alt="bg" width="100%" height="100%"/>
        <meta charset="UTF-8">
        <title>SeaTix</title>
        <h1 class="headlabel">SeaTix Login</h1>
    </head>
    <body>
        <div class="logincontainer">
            <form>
                <div class="loginform_input">
                    <input type="text" name="username" placeholder="Username"/>
                </div>
                <div class="loginform_input">
                    <input type="text" name="password" placeholder="Password"/>
                </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
                <div class="forgotpassword_input">
                    <label>Forgot Password?</label>
                </div>
                <label style="color:white;">or</label>
                <div class="signup_input">
                    <label>Don't have an account? <a href="google.com">Sign Up</a></label>
                </div>
            </form>
        </div>
        <div class="loginfooter">
            
        </div>
    </body>
</html>
