<?php 
    require('../db/dbconfig.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['password2'];

    if ($password != $confirmPassword) {
        header('location:../signup.php?code=3');
        die;
    }

    $results = mysqli_query($mysqli, "select * from account where username='$username'");
    $temp = mysqli_num_rows($results);

    if ($temp > 0 ) {
        header('location:../signup.php?code=1');
        die;
    }

    $validPassword = sha1($confirmPassword);

    $result = mysqli_query($mysqli, "INSERT INTO `account` (`username`, `password`, `email`) VALUES ('$username', '$validPassword', '$email');");

    echo 'lolos';
    if ($result) {
        header('location:../login.php');
    } else {
        header('location:../signup.php?code=2');
    } 
?>