<?php
    class Circle  {
        protected $radius;
        protected $color;
       
        public function __construct($radius=3, $color='red')
        {
            $this->color = $color;
            $this->radius = $radius;
        }
       
        public function setRadius($radius){
            $this->radius =$radius;
            return $this;
        }

        public function setColor($color){
            $this->color =$color;
            return $this;
        }

        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
       
        public function toString(){
            return __CLASS__."<br>Bán Kính: ".$this->radius."<br>Màu: ".$this->color."<br>Diện Tích: ".$this->calculateArea()."<br>";
        }
    }
?>