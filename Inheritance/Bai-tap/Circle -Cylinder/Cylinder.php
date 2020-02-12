<?php
    include 'Circle.php';
    class Cylinder extends Circle {
        private $height;

        public function __construct($height=2)
        {
            $this->height = $height;
        }

        public function setHeight($height){
            $this->height =$height;
            return $this;
        }

        public function getHeight(){
            return $this->height;
        }

        public function volume(){
            return pi() * pow($this->radius, 2) * $this->height;
        }

        public function toString(){
            return __CLASS__."<br>Chiều cao: ".$this->height."<br>Bán Kính: ".$this->radius."<br>Màu: ".$this->color."<br>Thể Tích: ".$this->volume();
        }
    }
?>