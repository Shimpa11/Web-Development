<?php
    session_start();
    $pid =  $_SESSION['pid'];
    $jid = $_GET['jid'];
    unset($_SESSION['apply']);
    $servername = 'sql544.main-hosting.eu';
    $username = 'u745359346_jobs';
    $password = 'u745359346_jobs_Calanjiyam_WDI_JUL2023_T2';
    $dbname = 'u745359346_jobs';
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if ($conn) {
        // echo "CONNECTION ok";
    } else {
        echo "connection failed";
        die("Connection failed:" . mysqli_connect_error());
    }
    $pid = $_SESSION["pid"];
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $sql = "INSERT INTO applications (ques1, ques2, ques3) VALUES ('$question1', '$question2', '$question3')";
    if(mysqli_query($conn, $sql)){
        echo'<script>window.alert("Applied Successfully");</script>';
    }
?>