<html>
    <head>
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
</html>
<!DOCTYPE html>
<html>
<?php

$servername = 'sql544.main-hosting.eu';
$username = 'u745359346_jobs';
$password = 'u745359346_jobs_Calanjiyam_WDI_JUL2023_T2';
$dbname = 'u745359346_jobs';

$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
// $jid = $_GET['jid'];
// echo $jid;



?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="loginStyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    
    
        @media (max-width:741px) {
            /*mobiles and tab */
    
            #login-box {
    
                width: 100%;
                height: 100%;
            }
    
            #form-box {
                width: 100%;
                padding-top: 15%;
            }
    
            .img {
                width: 100%;
                height: 100%;
            }
    
            h3 {
                display: block;
                font-family: 'josefin sans', sans-serif;
                padding: 5px;
                color: white;
                margin-top: 15%;
                text-align: center;
                font-size: 30px;
            }
    
            .logo {
                display: block;
                margin: auto;
                text-align: center;
                width: 30%;
                height: 17%;
            }
    
            .content {
                display: block;
            }
    
            .inputs {
                text-align: center;
            }
    
            .uemail {
                width: 70%;
                height: 5%;
                padding: 10px;
                margin-left: 2%;
                border: 0px solid transparent;
                border-radius: 10px;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                background-color: #cbdeec;
            }
    
            .upasskey {
                width: 70%;
                height: 5%;
                padding: 10px;
                margin-left: 2%;
                border: 0px solid transparent;
                border-radius: 10px;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                background-color: #cbdeec;
            }
    
            .eyebtn {
                display: inline;
                position: fixed;
                z-index: 1;
                padding: 5px;
                margin-top: 8px;
                margin-left: -40px;
                border: 1px solid transparent;
                border-radius: 10px;
                color: #0352BD;
            }
    
            .eyebtn:hover {
                cursor: pointer;
                color: #3B38F6;
            }
    
            .forgot-pass {
                width: 70%;
                height: 20px;
                padding: 10px;
                margin-left: 15%;
                text-decoration: none;
                font-size: 15px;
                font-family: 'nunito', sans-serif;
                color: #ffffff;
            }
    
            .forgot-pass:hover {
                color: #98fb98;
                text-decoration: underline;
            }
    
            .btn {
                border: 0.2px solid rgb(121, 172, 234);
                background-color: #ffffff;
                border-radius: 10px;
                display: block;
                text-align: center;
                padding: 15px;
                margin: auto;
                margin-top: 5%;
                font-family: 'nunito', sans-serif;
                font-size: 18px;
                font-weight: 700;
            }
    
            .btn:hover {
                background: #4974e9;
                color: white;
                cursor: pointer;
            }
    
            .notamember {
                display: block;
                margin: auto;
                text-align: center;
                margin-top: 5%;
                text-decoration: none;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                color: #ffffff;
            }
    
            .signup {
                color: white;
            }
        }
    
        @media(min-width:742px) {
    
            /* desktop */
            body {
                margin: 0;
            }
    
            #login-box {
                display: grid;
                grid-template-columns: 50% 50%;
                position: fixed;
                width: 100%;
                height: 100%;
            }
    
            #image-box {
                display: block;
                background-image: url('bg2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                margin: 10% 15% 15% 10%;
                height: 75%;
                width: 100%;
            }
    
            #form-box {
                width: 80%;
                margin-left: 15%;
            }
    
            .img {
                width: 100%;
                height: 100%;
            }
    
            h3 {
                display: block;
                font-family: 'josefin sans', sans-serif;
                padding: 5px;
                color: white;
                text-align: center;
                font-size: 30px;
            }
    
            .logo {
                display: block;
                margin: 15% 20% 10% 40%;
                text-align: center;
                width: 20%;
                height: 17%;
            }
    
            .content {
                display: block;
            }
    
            .inputs {
                text-align: center;
            }
    
            .uemail {
                width: 70%;
                height: 5%;
                padding: 10px;
                margin-left: 2%;
                border: 0px solid transparent;
                border-radius: 10px;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                background-color: #cbdeec;
            }
    
            .upasskey {
                width: 70%;
                height: 5%;
                padding: 10px;
                margin-left: 2%;
                border: 0px solid transparent;
                border-radius: 10px;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                background-color: #cbdeec;
            }
    
            .eyebtn {
                display: inline;
                position: fixed;
                z-index: 1;
                padding: 5px;
                margin-top: 8px;
                margin-left: -40px;
                border: 1px solid transparent;
                border-radius: 10px;
                color: #0352BD;
            }
    
            .eyebtn:hover {
                cursor: pointer;
                color: #3B38F6;
            }
    
            .forgot-pass {
                width: 70%;
                height: 20px;
                padding: 10px;
                margin-left: 15%;
                text-decoration: none;
                font-size: 15px;
                font-family: 'nunito', sans-serif;
                color: #ffffff;
            }
    
            .forgot-pass:hover {
                color: #98fb98;
                text-decoration: underline;
            }
    
            .btn {
                border: 0.2px solid rgb(121, 172, 234);
                background-color: #ffffff;
                border-radius: 10px;
                display: block;
                text-align: center;
                padding: 15px;
                margin: auto;
                font-family: 'nunito', sans-serif;
                font-size: 18px;
                font-weight: 700;
            }
    
            .btn:hover {
                background: #4974e9;
                color: white;
                cursor: pointer;
            }
    
            .notamember {
                margin-left: 37%;
                margin-top: 5%;
                text-decoration: none;
                font-size: 18px;
                font-family: 'nunito', sans-serif;
                color: #ffffff;
            }
    
            .signup {
                color: white;
            }
        }
    </style>
</head>

<body>
    <div id="login-box">
        <div id="image-box">
        </div>
        <div id="form-box">
            <img src="BG coloured circle logo.png" class="logo">
            <div class="content">
                <h3>Login to continue</h3>
                <form action="login-process.php?jid=<?php echo $jid; ?>" method="POST">
                    <div class="inputs">
                        <input type="email" name="email" class="uemail" placeholder="Enter your email" required><br><br>

                        <input type="password" id="upasskey" name="password" class="upasskey"
                            placeholder="Enter your password" required>
                        <button class="eyebtn" id="eyebtn" type="button" onclick="show_hide()"><i
                                class="bi bi-eye-fill"></i></button>
                    </div>

                    <br><br>
                    <a href="#" class="forgot-pass">Forgot password?</a><br><br>
                    <input type="submit" name="submit" class="btn" value="Submit">
                    <div class="notamember">Not a member? <a href="signup.php" class="signup">Signup</a><br><br>
                </form>
            </div>
        </div>
        <script>
            var stat = "hide";
            function show_hide() {
                if (stat == "hide") {
                    document.getElementById('upasskey').type = "text";
                    document.getElementById('eyebtn').innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
                    stat = "open";
                }
                else {
                    document.getElementById('upasskey').type = "password";
                    document.getElementById('eyebtn').innerHTML = "<i class='bi bi-eye-fill'></i>";
                    stat = "hide";
                }
            }
        </script>
</body>

</html>
