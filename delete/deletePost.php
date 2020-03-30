<?php 
    session_start();
    require('../db/dbconfig.php');

    $id_user = $_SESSION['id'];
    $id_post = $_GET['id'];

    $data = mysqli_query($mysqli,"update post set status = 0 where id='$id_post' and id_author='$id_user'");

    if ($data) {
        header('location:../profile.php?code=0');
    } else {
        header('location:../profile.php?code=1');
    }
?>