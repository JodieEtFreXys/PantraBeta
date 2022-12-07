<?php

    include ('../controller/function.php');
    include ('../controller/inputSanitize.php');
    include ('../model/dbQuery.php');


    function checkUserLogin ($conn, $username, $password) {
        $dbQuery = new Query();

        if (!empty($username) && !empty($password)) {
            $password = hashString($password);
            $loginQuery = $dbQuery->getLoginQuery.$username;

            $result = mysqli_query($conn, $loginQuery);
            if ($result) {
                $userData = mysqli_fetch_assoc($result);

                if ($password == $userData['password']) {
                    $_SESSION['userID'] = $userData['userID'];

                    die;
                    header('Location: ../view/main.php');
                }
            }

            die;
            header('Location: ../view/login.php');
        }

        die;
        header('Location: ../view/login.php');
    }

    function singupUser ($conn, $username, $email, $city, $country, $password, $confPassword) {
       if (!canUserSignup($username, $email, $city, $country, $password, $confPassword)) {
        //Gagal   
        die;
       }

       if ($password != $confPassword) {
        die;
       }
       $dbQuery = new Query();

       $password = hashString($password);
       $signupQuery = $dbQuery->getSignupQuery()
       ."('$username', '$email', '$city', '$country', '$password')";

       $result = mysqli_query($conn, $signupQuery);
       if ($result) {
            //TODO: Header
       }
    }

    function canUserSignup ($username, $email, $city, $country, $password, $confPassword) {
        if (
            !empty($username) &&
            !empty($email) &&
            !empty($city) &&
            !empty($country) &&
            !empty($password) &&
            !empty($confPassword)
           ) {
            if (
                validateUsername($_POST['username']) &&
                sanitizeEmail($_POST['email']) &&
                validatePlace($_POST['city']) &&
                validatePlace($_POST['country']) &&
                validatePassword($_POST['password']) &&
                validatePassword($_POST['confPassword']) &&
                $_POST['password'] == $_POST['confPassword']
              ) {
                return true;
              }

              return false;
           }

        return false;
    }
?>