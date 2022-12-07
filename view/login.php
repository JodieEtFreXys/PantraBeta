<?php

    session_start();

    // include ('../model/connection.php');
    include ('../controller/inputSanitize.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!sanitizeEmail($_POST['email'])) {
            die;
        }
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/credStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="login-card">
        <img class="logo-pantrana" src="/assets/images/Logo B.svg" alt="">
        <h2>LOGIN</h2>

        <form action="" class="login-form" method="POST">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Password" name="password">
            <button class="login-btn" type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>