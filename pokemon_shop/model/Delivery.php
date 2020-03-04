<?php
    namespace Model;
    class Delivery
    {
        public $id_delivery;
        public $orderNumber ;
        public $id_shiper ;
        public $requiredDate;
        public $status;
        

        public function __construct($orderNumber ,$id_shiper , $requiredDate , $status )
        {
            $this->orderNumber  = $orderNumber ;       
            $this->id_shiper = $id_shiper;
            $this->requiredDate = $requiredDate;
            $this->status = $status;
        }
    }