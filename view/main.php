<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <input id="toggler" type="checkbox">

        <label for="toggler">
          <img src="/assets/images/image 9.svg" alt="">
        </label>

        <div class="dropdown">
            <?php
                if (!isset($_SESSION['userID'])) {
                    echo '<a href="">Helps</a>';
                    echo '<a href="">Privacy Policy</a>';
                    echo '<a href="">About Us</a>';
                    echo '<a href="../view/signup.php">Register</a>';
                    echo '<a href="../view/login.php">Login</a>';
                } else {
                    echo '<a href="">Weekly Analytics</a>';
                    echo '<a href="">Helps</a>';
                    echo '<a href="">Privacy Policy</a>';
                    echo '<a href="">About Us</a>';
                    echo '<a href="../controller/userLogout.php">Logout</a>';
                }
            ?>
        </div>
    </div>

    <div class="topnav">
        <a class="stock" href="/view/main.php">Stock</a>
        <a class="uncurr-page" href="/view/shopList.php">Shopping List</a>
        <a class="uncurr-page" href="/view/recipe.php">Recipe</a>
        <a class="uncurr-page" href="/view/expired.php">Expired</a>
    </div>

    <div class="header-stocked">
        <p>
            <?php
                if (!isset($_SESSION['userID'])) {
                    echo 'Login to See stock!';
                } else {
                    echo $_SESSION['username']."'s Stock";
                }
            ?>
        </p>
    </div>

    <div class="body">
        
    </div>
</body>
</html>