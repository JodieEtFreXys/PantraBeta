<?php

    function sanitizeEmail ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function sanitizeUsername ($username) {
        $pattern = '/^[a-zA-Z0-9]*$';
        $result = preg_match($pattern, $username);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function sanitizePlace ($string) {
        $pattern = '/^[a-zA-A]*$';
        $result = preg_match($pattern, $string);

        if ($result) {
            return true;
        }
    }

    function sanitizeString ($string) {
        $result = htmlspecialchars($string, ENT_QUOTES);

        return $result;
    }
?>