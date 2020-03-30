<?php
    session_start();

    if(isset($_SESSION['username'])) {
        header("location:profile.php");
    }

    $sign = 0;

    if (!empty($_GET['f'])) {
        $code = $_GET['f'];

        switch ($code) {
            case 'true':
                    $error = 'Invalid password or username';
                    $sign = 1;
                break;
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/nav.css">
    <title>Log In - fahsy</title>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <p>fahsy</p>
        </div>
        <div class="nav__link">
            <a href="index.php">Home</a>
            <a href="login.php">Log In</a>
        </div>
    </nav>
    <div class="box">
        <div class="box__wrap">
            <div class="box__title">
                <p class="box__title--modifier">Log In</p>
            </div>
            <form action="login/verification.php" method="post">
                <div class="form__content">
                    <input type="text" name="username" id="username" class="input" placeholder="Username" required spellcheck="false" autofocus autocomplete="off">
                </div>
                <div class="form__content">
                    <input type="password" name="password" id="password" class="input" placeholder="Password" required spellcheck="false">    
                </div>
                <?php 
                    if ($sign == 1) {
                        echo '
                            <div class="errorBox">
                                <p class="errorBox--modifier">'.$error.'</p>
                            </div>
                        ';
                    }
                ?>
                <div class="form__button">
                    <button type="submit" class="button">Log In</button>
                </div>
            </form>
            <div class="signup">
                <a href="signup.php" class="signup--modifier">Create Account ?</a>
            </div>
        </div>
    </div>
</body>
</html>