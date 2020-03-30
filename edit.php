<?php
    session_start();

    require('db/dbconfig.php');

    if(!isset($_SESSION['username'])) {
        header("location:login.php");
    }

    $id_post = $_GET['id'];
    $id_user = $_SESSION['id'];

    $data = mysqli_query($mysqli,"select * from post where id='$id_post' and id_author='$id_user'");
    $get = mysqli_fetch_assoc($data);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/post.css">
    <link rel="stylesheet" href="style/nav.css">
    <title>Edit Post - fahsy</title>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <p>fahsy</p>
        </div>
        <div class="nav__link">
            <a href="index.php">Home</a>
            <a href="login.php"><?= $_SESSION['username'] ?></a>
        </div>
    </nav>
    <div class="post">
        <form action="update/updatePost.php?id=<?= $id_post ?>" method="post" enctype="multipart/form-data">
            <div class="post__title">
                <p class="post__title--modifier">Edit Post</p>
            </div>
            <div class="post__inputTitle">
                <input type="text" name="title" id="title" required autocomplete="off" spellcheck="false" placeholder="Title" autofocus class="inputTitle" value="<?= $get['title'] ?>">
            </div>
            <div class="post__content">
                <p class="post__content--modifier">Image : </p>
                <input type="file" name="image" id="image" alt="" accept=".png, .jpg, .jpeg" class="inputImage">
            </div>
            <div class="post__content">
                <textarea name="content" id="content" class="textarea" required spellcheck="false"><?= $get['content'] ?></textarea>
            </div>
            <div class="post__content">
                <button type="submit" class="postButton">Update</button>
            </div>
        </form>
    </div>
</body>
</html>