<?php
    session_start();

    if(!isset($_SESSION['username'])) {
        header("location:login.php");
        exit;
    }

    require('db/dbconfig.php');
    $id = $_SESSION['id'];

    $data = mysqli_query($mysqli,"select * from post where id_author = '$id' and status = 1 order by id desc");
    $results = mysqli_num_rows($data); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <link rel="stylesheet" href="style/nav.css">
    <title><?= $_SESSION['username'] ?> - fahsy</title>
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
    <div class="header">
        <div class="header__title">
            <p class="header__title--modifier">Profile of <?= $_SESSION['username'] ?></p>
        </div>
        <div class="header__logout">
            <form action="session/logOut.php">
                <button class="logOut">Log Out</button>
            </form>
        </div>
    </div>
    <div class="content">
        <a href="post.php">
            <div class="addpost">
                <div class="addpost__icon">
                    <p class="addpost__icon--modifier">+</p>
                </div>
                <div class="addpost__title">
                        <p class="addpost__title--modifier">Add post</p>
                </div>
            </div>
        </a>
        <div class="post">
            <div class="post__header">
                <p class="post__header--title">POST</p>
            </div>
            <?php if ($results > 0) { 
                while ($get = mysqli_fetch_assoc($data)) {
                    $contentLength = 195;
                    $titleLength = 70;
                    $author = $_SESSION['username'];

                    if (strlen($get['content']) >= $contentLength) {
                        $content = substr($get['content'], 0, $contentLength) . '...';
                    } else {
                        $content = $get['content'];
                    };

                    if (strlen($get['title']) > $titleLength) {
                        $title = substr($get['title'],0 , $titleLength) . '...';
                    } else {
                        $title = $get['title'];
                    };

                    echo '
                    <div class="post__container">
                        <div class="post__image">
                            <img src="'.$get['imageurl'].'" alt="" class="images">
                        </div>
                        <div class="post__content">
                            <div class="post__title">
                                <p class="post__title--modifier">'.$title.'</p>
                                <div class="post_editDelete">
                                    <div class="post_edit">
                                        <a href="" class="post_edit--modifier">Edit</a>
                                    </div>
                                    <a href="delete/deletePost.php?id='.$get['id'].'">
                                        <img src="assets/cross.svg" class="exit">
                                    </a>
                                </div>
                            </div>
                            <div class="post__date">
                                <p class="post__date--modifier">'.$get['date'].' &#183; '.$author.' </p>
                            </div>
                            <div class="post__content">
                                <p class="post__content--modifier">'.$content.'</p>
                            </div>
                        </div>
                    </div> ';
                }
             } else { 
                 echo '
                <div class="no_post">
                    <p class="no_post--modifier">You have no post.</p>
                </div>
                ';
             } ?>
        </div>
    </div>
</body>
</html>