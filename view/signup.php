<?php

  session_start();

  include ('../controller/inputSanitize.php');
  include ('../controller/authController.php');

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
    <div class="login-page">
        <div class="form">
          <div class="login">
            <div class="login-header">
              <h3>Register</h3>
              <p>Please enter your credentials to login.</p>
            </div>
          </div>
          <form class="login-form" method="POST">
            <input type="text" placeholder="Username" name="username"/>
            <input type="text" placeholder="Email" name="name"/>
            <input type="text" placeholder="City" name="city"/>
            <input type="text" placeholder="Country" name="country"/>
            <input type="password" placeholder="Password" name="password"/>
            <input type="password" placeholder="Confirm Password" name="confPassword"/>
            <button type="submit">REGISTER</button>
          </form>
        </div>
    </div>
</body>
</html>