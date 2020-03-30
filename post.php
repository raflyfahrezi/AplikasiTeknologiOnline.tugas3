<?php
    session_start();

    if(!isset($_SESSION['username'])) {
        header("location:login.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/post.css">
    <link rel="stylesheet" href="style/nav.css">
    <title>Post - fahsy</title>
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
        <form action="upload/uploadPost.php" method="post" enctype="multipart/form-data">
            <div class="post__title">
                <p class="post__title--modifier">Add Post</p>
            </div>
            <div class="post__inputTitle">
                <input type="text" name="title" id="title" required autocomplete="off" spellcheck="false" placeholder="Title" autofocus class="inputTitle">
            </div>
            <div class="post__content">
                <p class="post__content--modifier">Image : </p>
                <input type="file" name="image" id="image" alt="" required accept=".png, .jpg, .jpeg" class="inputImage">
            </div>
            <div class="post__content">
                <textarea name="content" id="content" class="textarea" required spellcheck="false"></textarea>
            </div>
            <div class="post__content">
                <button type="submit" class="postButton">Post</button>
            </div>
        </form>
    </div>
</body>
</html>