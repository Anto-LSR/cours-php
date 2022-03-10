<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In!</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Login Form -->
        <form method="POST" action="controller.php">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <?php
            if (isset($_SESSION["loginError"])) {
                ?>
                    <div class="alert alert-danger">
                        <p >Erreur d'identification</p>
                    </div>

            <?php
            session_unset();
            session_destroy();
            } ?>

            <a class="underlineHover" href="forgotpass.php">Forgot Password?</a>
        </div>

    </div>
</div>
</body>
</html>

