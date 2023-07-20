<?php

$servername = 'sql544.main-hosting.eu';
$username = 'u745359346_jobs';
$password = 'u745359346_jobs_Calanjiyam_WDI_JUL2023_T2';
$dbname = 'u745359346_jobs';

$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
if(!(isset($_SESSION['pid'])))
{
    echo "<script>window.alert('Login to Continue')";
  echo "<script>window.location.href = 'login.php';</script>";
}
$jid = $_GET['jid'];
$_SESSION['apply']=$jid;
// echo $jid;
?>

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Job</title>
        <link rel="icon" type="image/png" href="favicon.png">
    	<style>
    	@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    	body{
            margin: 0;
        }    
        @media ( max-width : 749px )
            {
                .title
                {
                    display: inline-block;
                    
                }
                .title img
                {
                    display: inline-block;
                    vertical-align: middle;
                    width: 70px;
                }
                .title h2
                {
                    display: inline-block;
                    font-family: 'josefin sans',sans-serif;
                    vertical-align: middle;
                    font-size: 16px;
                    font-weight: 400;
                    line-height: 1.2;
                }
                .profile
                {
                    display: inline-block;
                    float: right;
                }
                .profile img
                {
                    display: inline-block;
                    margin-top: 10px;
                    margin-right: 15px;
                    width: 50px;
                    vertical-align: middle;
                    float: right;
                }
                .menu
                 {
                    display: none;
                 }
                 #apply_head
                 {
                     display: block;
                     margin-top: 20px;
                     width: 90%;
                 }
                 .apply_head h1
                 {
                     display: inline-block;
                     font-family: 'josefin sans',sans-serif;
                     vertical-align: middle;
                     font-size: 30px;
                     width: 95%;
                     text-align: center;
                     font-weight: 400;
                     line-height: 1.2;
                 }
                 .container {
                    max-width: 90%;
                    margin: 0 auto;  
                }

                .apply_box {
                    max-width: 100%;
                    padding: 20px;
                    background-color: #f1f1f1;
                    margin: 0 auto;
                    margin-top: 50px;
                    border: 3px solid #0352BD;
                    box-shadow: 4px 4px 10px#628cc7;
                    border-radius: 20px;
                }
                .form_container  {
                    display: grid;
                    gap: 20px;
                }
                .form_control {
                    display: flex;
                    flex-direction: column;
                    margin-bottom: 30px;
                }
                label {
                    font-size: 15px;
                    font-family: 'josefin sans', sans-serif;
                    color: #0352BD;
                    width: 100%;
                    font-weight: 600;
                }
                
                textarea:focus{
                    outline-color: #0352BD;
                }
                .button_container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 20px;
                }

                button {
                    height: 40px;
                    width: 20%;
                    background-color: #0352BD;
                    border: transparent solid 2px;
                    padding: 5px 10px;
                    color: white;
                    border-radius: 8px;
                    transition: 0.3s ease-in;
                    font-family: 'josefin sans', sans-serif;
                    border: 2px solid black;
                }
                .apply_head{
                    display: block;
                }
                .apply_head h1 {
                    text-align: center;
                    font-size: 40px;
                }
                h5{
                    text-align: center;
                    font-size: 15px;
                    font-family: 'nunito', sans-serif;
                    margin-top: 40px;
                    margin-bottom: 10px;
                }
                #question1, #question2 , #question3{
                    padding: 6px 10px;
                    margin-top: 20px;
                    font-family: 'josefin sans', sans-serif;
                    font-size: 17px;
                    resize: none;
                    width: 90%;
                    height: 80px;
                    border: 2px solid #628cc7;
                    border-radius: 10px;
                }

                .social {
                    padding: 20px;
                    font-family: 'nunito',sans-serif;
                    font-size: 15px;
                    color: white;
                    margin-left: 90px;
                    width: 55%;
                    text-align: center
                }
                .social_icon {
                    width: 10%;
                }
                #contact {
                    margin-top: 40px;
                    display: block;
                    width: 100%;
                    background-color: #0352BD;
                }
                .about_head{
                    display: block;
                    text-align: center;
                    font-family: 'josefin sans',sans-serif;
                    font-size: 20px;
                    font-weight: 500;
                }
                .footer_grid
                 {
                     display: block;
                     /*grid-template-columns: 50% 50%;*/
                 }
                 .social
                {
                    display:block;
                    padding: 20px;
                    font-family: 'nunito',sans-serif;
                    font-size: 15px;
                    color: white;
                    margin-bottom: 15px;
                }
                .social_inner
                {
                    display:block;
                    width:100%;
                }
                .social_inner h4,p
                {
                    text-align:center;
                }
                .linkoption
                {
                    display: block;
                    width:100%;
                    border-radius: 75px;
                    margin-top: 40px;
                    vertical-align: middle;
                    color: white;
                }
                .linkoption a
                {
                    display: block;
                    background: transparent;
                    padding: 1px;
                    font-family: 'nunito',sans-serif;
                    font-size: 16px;
                    margin-top: 25px;
                    text-decoration: none;
                    color: white;
                    text-align:center;
                }
            }
            @media ( min-width : 750px )
            {
            #navbar
            {
                display: grid;
                grid-template-columns: auto auto auto;
            }
                 
            .title
            {
                display: block;
            }
            .title img
            {
                display: inline-block;
                vertical-align: middle;
                width: 80px;
            }
            .title h2
            {
                display: inline-block;
                font-family: 'josefin sans',sans-serif;
                vertical-align: middle;
                font-size: 18px;
                font-weight: 400;
                line-height: 1.2;
            }
            .menu
            {
                display: block;
                height: 100px;
            }
            .menu a
            {
                display: inline-block;
                background: transparent;
                padding: 10px;
                padding-left: 20px;
                padding-right: 20px;
                font-family: 'nunito',sans-serif;
                font-size: 16px;
                margin-top: 25px;
                text-decoration: none;
                color: black;
                border-radius: 25px;
            }
            .menu a:hover
            {
                background: #0352BD;
                color: white;
            }
            .profile
            {
                display: block;
            }
            .profile img
            {
                display: inline-block;
                margin-top: 10px;
                margin-right: 15px;
                width: 60px;
                vertical-align: middle;
                float: right;
            }
            .container {
                max-width: 70%;
                margin: 0 auto;
                
            }

            .apply_box {
                max-width: 900px;
                padding: 20px;
                background-color: #f1f1f1;
                margin: 0 auto;
                margin-top: 50px;
                border: 3px solid #0352BD;
                box-shadow: 4px 4px 10px#628cc7;
                border-radius: 20px;
            }
            .form_container  {
                display: grid;
                gap: 20px;
            }
            .form_control {
                display: flex;
                flex-direction: column;
                margin-bottom: 30px;
            }
            label {
                font-size: 20px;
                font-family: 'josefin sans', sans-serif;
                color: #0352BD;
                font-weight: 800;
            }
            
            textarea:focus{
                outline-color: #0352BD;
            }
            .button_container {
                display: flex;
                justify-content: center;
                margin-top: 20px;
                align-items: center;
            }

            button {
                height: 40px;
                width: 20%;
                background-color: #0352BD;
                border: transparent solid 2px;
                padding: 5px 10px;
                color: white;
                border-radius: 8px;
                transition: 0.3s ease-in;
                align-items: center;
                font-family: 'josefin sans', sans-serif;
                border: 2px solid black;
            }
            .apply_head{
                display: block;
            }
            .apply_head h1 {
                text-align: center;
                font-size: 60px;
                font-family: 'nunito', sans-serif;
            }
            h5{
                text-align: center;
                font-size: 23px;
                margin-top: 40px;
                margin-bottom: 10px;
            }
            #question1, #question2 , #question3{
                padding: 6px 10px;
                margin-top: 20px;
                font-family: 'josefin sans', sans-serif;
                font-size: 17px;
                resize: none;
                width: 90%;
                height: 100px;
                border: 2px solid #628cc7;
                border-radius: 10px;
            }
            #contact
            {
                display: block;
                width: 100%;
                background-color: #0352BD; 
                margin-top: 10rem;

            }
             .footer_grid
            {
                display: grid;
                grid-template-columns: 50% 50%;
            }
            .social
            {
                padding: 20px;
                font-family: 'nunito',sans-serif;
                font-size: 15px;
                color: white;
            }
            .about_head
            {
                display: block;
                text-align: center;
                font-family: 'josefin sans',sans-serif;
                font-size: 20px;
                font-weight: 500;
            }
            .social_inner
            {
                width:300px;
                float:right;
            }
            .linkoption
            {
                display: block;
                width:100%;
                border-radius: 75px;
                margin-top: 40px;
                margin-right: 250px;
                vertical-align: middle;
                color: white;
            
            }
            .linkoption a
            {
                display: block;
                background: transparent;
                padding: 1px;
                font-family: 'nunito',sans-serif;
                font-size: 16px;
                margin-top: 25px;
                text-decoration: none;
                color: white;
                width:300px;
                text-align:right;
            }
            p{
                font-family: 'nunito',sans-serif;
                font-size: 15px;
            }
            
        }
        #social_icons
        {
            width:156px;
            margin:auto;
            margin-top: 15px;
            padding-bottom:10px;
        }
        #social_icons a
        {
            margin-right:1px;
            text-align:center;
        }
    	</style>
    </head>
    <body>
        <div id="navbar">
            <div class="title">
                <img src="https://static.wixstatic.com/media/8b8f2d_46f5f8aaf3ad4e93b98f0e8a390e19e8~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20Dark%20shadowed%20compressed.png">
                <h2>Calanjiyam Consultancies <br>and Technologies</h2>
            </div>
            <div class="menu">
                <a href="home.html">Home</a>
                <a href="jobs.html">Jobs</a>
                <a href="contact.html">Contact</a>
            </div>
            <div class="profile">
                <a href="profile.html"><img src="https://img.freepik.com/free-icon/user_318-563642.jpg"></a>
            </div>
        </div>
        <div class="apply_head">
            <h1>Web Developer Intern</h1>
        </div>
        <h5>Job Application Form</h5>
        <div class="container">
            <div class="apply_box"> 
                <form action="applysave.php?jid=<?php echo $jid; ?>" method="post">
                    <div class="form_container">
                        <div class="form_control">
                            <label for="question1">1. Tell something about your last job role.</label>
                            <textarea id="question1" name="question1" placeholder="Write Here!!" required ></textarea>
                        </div>
                        <div class="form_control">
                            <label for="question2">2. Why comapany should hire you?</label>
                            <textarea id="question2" name="question2" placeholder="Write Here!!" required ></textarea>
                        </div>
                        <div class="form_control">
                            <label for="question3">3. Please list 2-3 dates and time ranges that you could do an interview.</label>
                            <textarea id="question3" name="question3" placeholder="Write Here!!" required ></textarea>
                        </div>
                    </div>
                    <div class="button_container">
                        <button type="submit">Apply Now</button>
                    </div>
                </form>
            </div>

        </div>

        <div id="contact">
            <img src="https://static.wixstatic.com/media/b6ebdb_c95f35afa26a4685b7418c07c2756fde~mv2.png/v1/fill/w_117,h_117,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Overlay%20light%20shadowed%20compressed.png" style="width:100px;margin:auto;display: block;">
            <h4 class="about_head" style="color: white;line-height: 1.5;">Calanjiyam Consultancies and Technologies</h4>
            <p style="text-align: center;color: white;" >Think Before Acting</p>
            <div class="footer_grid">
                <div class="social">
                    <div class="social_inner">
                        <h4>Phone:</h4>
                        <p>+918667280728</p>
                        <h4>Mail:</h4>
                        <p>hr@calanjiyam@gmail.com</p>
                        <p>info@crisscrosstamizh.in</p>
                    </div>
                </div>
                <div class="linkoption">
                    <a href="home.html">Home</a>
                    <a href="jobs.html">Jobs</a>
                    <a href="contact.html">Contact</a>
                </div>  
            </div>
            <div id="social_icons">
                <a style="margin-left:10px;" href="https://twitter.com/crisscrosstamiz"><img src="https://static.wixstatic.com/media/11062b_7dcffe5daf2944b7be0a46ac6d472634~mv2.png/v1/fill/w_44,h_44,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_7dcffe5daf2944b7be0a46ac6d472634~mv2.png"></a>
                <a href="https://twitter.com/crisscrosstamiz"><img src="https://static.wixstatic.com/media/11062b_c67939a99eaf442d95d3f851857ceedf~mv2.png/v1/fill/w_44,h_44,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_c67939a99eaf442d95d3f851857ceedf~mv2.png"> </a>
                 <a href="https://twitter.com/crisscrosstamiz"><img src="https://static.wixstatic.com/media/269c5c_156dd341aa3a47e693f896910c01697d~mv2.png/v1/fill/w_44,h_44,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/269c5c_156dd341aa3a47e693f896910c01697d~mv2.png"></a>
            </div>
        </div>
        
    </body>
</html>