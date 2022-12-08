<?php

    

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
        <a class="stock" href="/view/main.php">Stock</a>
        <a class="uncurr-page" href="/view/shopList.php">Shopping List</a>
        <a class="uncurr-page" href="/view/recipe.php">Recipe</a>
        <a class="uncurr-page" href="/view/expired.php">Expired</a>
    </div>

    <div class="header-stocked">
        <p>Stocked</p>
    </div>

    <div class="body">
        <table>
            <thead>
                <tr>
                <th>Food Type</th>
                <th>Expiration Date</th>
                <tr>
            <thead>
            <tbody>
                <tr>
                    <td data-title="stockName"><p><?php echo $row["stockName"] ?></p></td>
                    <td data-title="stockDate"><p><?php echo $row["stockDate"] ?></p></td>
                </tr>
            </tbody>
        <table>
        
    </div>
</body>
</html>