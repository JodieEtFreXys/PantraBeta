<?php

    session_start();

    include ('../model/connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
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

        <form action="" class="login-form">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Password" name="password">
            <button class="login-btn" type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>