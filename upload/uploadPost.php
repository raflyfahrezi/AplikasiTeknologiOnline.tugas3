<?php 
    session_start();
    require('../db/dbconfig.php');

    $targetFolder = './images/';
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $content = $_POST['content'];
    $date = date("j F Y");
    $id = $_SESSION['id'];

    $imageFileType = strtolower(pathinfo(basename($image),PATHINFO_EXTENSION));

    $data = mysqli_query($mysqli,"select * from post where id_author='$id'");
    $renamedName = $_SESSION['id'] . mysqli_num_rows($data) . '.' . $imageFileType;
    $imageURL = "upload/images/" . $renamedName;

    $result = mysqli_query($mysqli, "INSERT INTO `post` (`id`, `title`, `date`, `content`, `imageurl`, `id_author`, `status`) VALUES (NULL, '$title', '$date', '$content', '$imageURL', '$id', '1');");
    if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFolder.$renamedName);
        header('location:../profile.php');
    } else {
        echo mysqli_error($mysqli);
    }
?>