<?php

    class Query {
        public $loginQuery = "SELECT * FROM user WHERE username = ";
        public $signupQuery = "INSERT INTO user (username, email, password, city, country) VALUES ";
        public $recipeQuery = "SELECT * FROM recipeheader WHERE userID = ";

        public function getLoginQuery () {
            return $this->loginQuery;
        }

        public function getSignupQuery () {
            return $this->signupQuery;
        }
    }
?>