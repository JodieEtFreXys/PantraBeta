<?php

    class Query {
        public $loginQuery = "SELECT * FROM user WHERE username = ";

        public function getName () {
            return $this->loginQuery;
        }
    }

?>