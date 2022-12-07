<?php

    include ('../controller/function.php');
    include ('../model/dbQuery.php');

    $query = new Query();

    function checkUserLogin ($conn, $username, $password) {
        if (!empty($username) && !empty($password)) {
            $password = hashString($password);
            $loginQuery = '';

            $result = mysqli_query($conn, $loginQuery);
            if ($result) {
                $userData = mysqli_fetch_assoc($result);

                if ($password == $userData['password']) {
                    //Maka Login
                } else {
                    //Maka salah
                }
            } else {
                //Maka salah
            }
        }
    }

    function singupUser ($name, $email, $city, $country, $password, $confPassword) {
       if (!canUserSignup($name, $email, $city, $country, $password, $confPassword)) {
        //Gagal   
        die;
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