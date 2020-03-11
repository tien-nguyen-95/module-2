<?php
    namespace Model;
    class Payment
    {
        public $customer ;
        public $orderNumber;
        public $date;
        public $payment;
        
        public function __construct( $orderNumber , $customer , $date ,$payment)
        {
            $this->customer = $customer;
            $this->orderNumber = $orderNumber;
            $this->date = $date;
            $this->payment = $payment;
        }
    }