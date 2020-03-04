<?php
    namespace Model;
    class Customer
    {
        public $id_customer;
        public $name;
        public $phone;
        public $email;
        public $address;

        public function __construct($name,$phone,$email,$address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->address = $address;
        }
    }