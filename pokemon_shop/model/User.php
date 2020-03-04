<?php
    class User
    {
        public $id;
        public $usename;
        public $password;

        public function __construct($usename , $password)
        {
            $this->usename = $usename;
            $this->password = $password;
        }
    }
?>