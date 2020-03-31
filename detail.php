<?php 
    session_start();
    require('db/dbconfig.php');

    $username = 'stranger';
    $log = 'Log In';
    $post_id = $_GET['id'];

    if (isset($_SESSION['username'])) {
        $log = $_SESSION['username'];
    }

    $data = mysqli_query($mysqli,"select * from post where id='$post_id'");
    $res = mysqli_fetch_assoc($data);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/detail.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <p>fahsy</p>
        </div>
        <div class="nav__link">
            <a href="index.php">Home</a>
            <a href="login.php"><?= $log ?></a>
        </div>
    </nav>
    <div class="content">
        <div class="content__title">
            <p class="content__title--modifier"><?= $res['title'] ?></p>
        </div>
        <div class="content__image">
            <img src="<?= $res['imageurl'] ?>" alt="" class="image">
        </div>
        <div class="content__content">
            <p class="content__content--modifier"><?= $res['content'] ?></p>
        </div>
    </div>
</body>
</html>