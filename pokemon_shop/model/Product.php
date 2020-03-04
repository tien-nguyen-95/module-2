<?php
    namespace Model;
    class Product
    {
        public $productCode;
        public $productName;
        public $width;
        public $height;
        public $material;
        public $image;
        public $price;

        public function __construct($productName,$width,$height,$material,$image,$price)
        {
            $this->productName = $productName;
            $this->width = $width;
            $this->height = $height;
            $this->material = $material;
            $this->image = $image;
            $this->price = $price;
        }
    }