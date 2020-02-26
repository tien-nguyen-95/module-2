<?php
    namespace Model;
    class Product
    {
        public $productCode;
        public $productName;
        public $width;
        public $height;
        public $material;
        public $description;
        public $price;

        public function __construct($productName,$width,$height,$material,$description,$price)
        {
            $this->productName = $productName;
            $this->width = $width;
            $this->height = $height;
            $this->material = $material;
            $this->description = $description;
            $this->price = $price;
        }
    }