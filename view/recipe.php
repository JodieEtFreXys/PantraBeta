<?php

    session_start();

    include ("../model/connection.php");
    include ("../model/dbQuery.php");
    $dbName = 'pantrana';
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
            <a href="">Weekly Analytics</a>
            <a href="">Help</a>
            <a href="">Privacy Policy</a>
            <a href="">About Us</a>
            <a href="../view/signup.php">Register</a>
            <a href="../view/login.php">Login</a>
            <a href="">Logout</a>
        </div>
    </div>

    <div class="topnav">
        <a class="uncurr-page" href="/view/main.php">Stock</a>
        <a class="uncurr-page" href="/view/shopList.php">Shopping List</a>
        <a class="recipe" href="/view/recipe.php">Recipe</a>
        <a class="uncurr-page" href="/view/expired.php">Expired</a>
    </div>

    <div class="header-recipe">
        <p>Recipe</p>
    </div>

    <div class="body">
        <table class="table-header">
            <thead>
                <tr>
                <th>Ingredients</th>
                <th>Cooking Method</th>
                <tr>
            <thead>
            <tbody>
                <tr>
                    <td data-title="ingredients"><p><?php echo $row["ingredients"] ?></p></td>
                    <td data-title="cookMethod"><p><?php echo $row["cookMethod"] ?></p></td>
                </tr>
            </tbody>
        <table>
    </div>

    </div>
</body>
</html>