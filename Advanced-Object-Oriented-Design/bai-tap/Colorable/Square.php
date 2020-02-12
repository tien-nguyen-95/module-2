<?php
    include_once 'Colorable.php';
    class Square implements Colorable
    {
        private $width;
        
        public function __construct($width=5)
        {
            $this->width = $width;
        }
    
        public function calculateArea(){
            return $this->width * $this->width;
        }
    
        public function howToColor()
        {
            return "Color all four sides.";
        }
    
        public function toString()
        {
            return "<br>".__CLASS__."<br>Diện tích: ".$this->calculateArea()."<br>".$this->howToColor();
        }
    }
?>