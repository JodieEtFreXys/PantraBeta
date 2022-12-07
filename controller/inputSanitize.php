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

    function sanitizeHtmlTag ($string) {
        $result = htmlspecialchars($string, ENT_QUOTES);

        return $result;
    }

    function validateUsername ($username) {
        $result = sanitizeHtmlTag($username);

        if (sanitizeUsername($result)) {
            return true;
        }

        return false;
    }

    function validatePlace ($place) {
        $result = sanitizeHtmlTag($place);

        if (sanitizePlace($result)) {
            return true;
        }

        return false;
    }

    function validatePassword ($password) {
        if (sanitizeHtmlTag($password) == $password) {
            return true;
        }

        return false;
    }
?>