<?php
    session_start();
    require('../db/dbconfig.php');

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $date = date("j F Y");
    $id_post = $_GET['id'];
    $id_user = $_SESSION['id'];

    if ($image) {
        $targetFolder = '../upload/images/';
        $id = $_SESSION['id'];
        $imageFileType = strtolower(pathinfo(basename($image),PATHINFO_EXTENSION));

        $data = mysqli_query($mysqli,"select * from post where id_author='$id'");
        $renamedName = $_SESSION['id'] . mysqli_num_rows($data) . '.' . $imageFileType;
        $imageURL = "upload/images/" . $renamedName;
    
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFolder.$renamedName);
        $query = "update post set title = '$title', content = '$content', date = '$date', imageurl = '$imageURL' where id = '$id_post' and id_author = '$id_user'";
    } else {
        $query = "update post set title = '$title', content = '$content', date = '$date' where id = '$id_post' and id_author = '$id_user'";
    }

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('location:../profile.php?code=0');
    } else {
        header('location:../profile.php?code=1');
    }
?>