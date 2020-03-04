<?php
    namespace Model;
    class Order
    {
        public $orderNumber ;
        public $id_customer ;
        public $name;
        public $productCode;
        public $productName;
        public $orderDate;
        public $quantity;
        

        public function __construct($id_customer ,$productCode , $orderDate , $quantity ,$name=NULL , $productName=NULL )
        {
            $this->id_customer  = $id_customer ;
            $this->name = $name;
            $this->productCode = $productCode;
            $this->productName = $productName;
            $this->orderDate = $orderDate;
            $this->quantity = $quantity;
        }
    }