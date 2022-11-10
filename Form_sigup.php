<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title> Sign Up | Henil Code</title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="icon" href="Image/Henil.ico">
</head>

<body>
    <div class="main">
        <div class="box">
            <div class="header">
                <img src="Image/Henil.ico" alt="not load">
                <div class="h-data">
                    <a href="" class="logo_name">Henil Codes</a>
                    <h5>Create Account</h5>
                </div>
            </div>
            <div class="infor">
                <form autocomplete="off" action="UserLog_phcode.php" method="post">
                    <div class="input_box">
                        <span class="TagIn">User name</span>
                        <input type="text" name="U_name" class="input" placeholder="type username" id="user" required
                            title="User Name">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">Email Address</span>
                        <input type="email" name="U_email" class="input" placeholder="type email" id="Uemail" required
                            title="Email Address">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">password</span>
                        <div class="passwor">
                            <input type="password" name="U_password" class="inputx" placeholder="type Password"
                                id="Upassword" required title="Password">
                            <span class="bi bi-eye-fill" id="show_hide_password"></span>
                        </div>
                    </div>
                    <button class="Log_Button" type="submit" id="login" name="U_Signup">Sign Up</button>
                </form>
            </div>
            <div class="or">
                <div class="desd"></div>
                <span class="osr">OR</span>
                <div class="desd"></div>
            </div>
            <div class="box1_bottm">
                <span class="crea">Have an account?</span> <a href="Form_login.php" class="sign_up"> Log In</a>
            </div>
        </div>

        <div class="Footer">
            <span>© 2022 <a href="https://henilcodes.github.io/PH/"> Henil Code</a> </span>
        </div>
</body>
<script src="JS/valid.js"></script>

</html>