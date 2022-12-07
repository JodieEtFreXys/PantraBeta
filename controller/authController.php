<?php

    include ('../controller/function.php');
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
                    //Maka Login
                }
            }
        }
    }

    function singupUser ($conn, $name, $email, $city, $country, $password, $confPassword) {
       if (!canUserSignup($name, $email, $city, $country, $password, $confPassword)) {
        //Gagal   
        die;
       }

       if ($password != $confPassword) {
        die;
       }
       $dbQuery = new Query();

       $password = hashString($password);
       $signupQuery = $dbQuery->getSignupQuery()
       ."('$name', '$email', '$city', '$country', '$password')";

       $result = mysqli_query($conn, $signupQuery);
       if ($result) {
            //TODO: Header
       }
    }

    function canUserSignup ($name, $email, $city, $country, $password, $confPassword) {
        if (
            !empty($name) &&
            !empty($email) &&
            !empty($city) &&
            !empty($country) &&
            !empty($password) &&
            !empty($confPassword)
           ) {
            return true;
           }

        return false;
    }
?>