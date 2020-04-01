<?php
    session_start();

    require('../db/dbconfig.php');

    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $data = mysqli_query($mysqli,"select * from account where username='$username' and password='$password'");

    $result = mysqli_num_rows($data);
    $results  = mysqli_fetch_assoc($data);

    if($result > 0){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $results['id'];
        // $_SESSION['status'] = "login";
        header("location:../profile.php");
    } else {
        header("location:../login.php?f=true");
    }
?>