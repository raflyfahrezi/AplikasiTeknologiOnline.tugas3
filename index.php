<?php
    session_start();
    require('db/dbconfig.php');

    $username = 'stranger';
    $log = 'Log In';

    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $log = $_SESSION['username'];
    }

    $data = mysqli_query($mysqli,"select * from post where status = 1 order by id desc");
    $results = mysqli_num_rows($data); 

    function checkAuthor($params) {
        require('db/dbconfig.php');

        $result = mysqli_query($mysqli,"select * from account where id = " . $params);
        $result = mysqli_fetch_assoc($result);
        return $result['username'];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/nav.css">
    <title>Home - fahsy</title>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <p>fahsy</p>
        </div>
        <div class="nav__link">
            <a href="">Home</a>
            <a href="login.php"><?= $log ?></a>
        </div>
    </nav>
    <div class="header">
        <p class="header__title--modifier">Welcome, <?= $username ?></p>
    </div>
    <div class="content">
        <div class="post">
            <div class="post__header">
                <p class="post__header--title">LATEST POST</p>
            </div>
            <?php if ($results > 0) { 
                while ($get = mysqli_fetch_assoc($data)) {
                    $contentLength = 195;
                    $titleLength = 70;
                    $author = checkAuthor($get['id_author']);

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