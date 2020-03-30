<?php
    session_start();

    if(isset($_SESSION['username'])) {
        header("location:profile.php");
    }

    $sign = 0;

    if (!empty($_GET['code'])) {
        $code = $_GET['code'];

        switch ($code) {
            case '3':
                    $error = 'Password doesnt match';
                    $sign = 1;
                break;

            case '1':
                    $error = 'Username is taken';
                    $sign = 1;
                break;

            case '2':
                    $error = 'Something error. Try again later';
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
    <title>Sign Up - fahsy</title>
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
                <p class="box__title--modifier">Sign Up</p>
            </div>
            <form action="login/createAcc.php" method="post">
                <div class="form__content">
                    <input type="text" name="username" id="username" class="input" placeholder="Username" required spellcheck="false" autofocus autocomplete="off">
                </div>
                <div class="form__content">
                    <input type="email" name="email" id="email" class="input" placeholder="Email" required spellcheck="false" autofocus autocomplete="off">
                </div>
                <div class="form__content">
                    <input type="password" name="password" id="password" class="input" placeholder="Password" required spellcheck="false">    
                </div>
                <div class="form__content">
                    <input type="password" name="password2" id="password2" class="input" placeholder="Confirm password" required spellcheck="false">    
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
                    <button type="submit" class="button">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>