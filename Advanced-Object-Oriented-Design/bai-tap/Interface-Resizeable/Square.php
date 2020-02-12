<?php

    include_once ('Rectangle.php');
    include_once 'Resizeable.php';


    class Square extends Rectangle implements Resizeable
    {
        public function __construct($name='Square', $width=5)
        {
            parent::__construct($name, $width, $width, $width);
        }

        public function calculateArea(){
            return $this->width * $this->width;
        }

        public function resize()
        {
            $this->width *= rand(1, 100);
            return $this;
        }
        public function toString()
        {
            return "<br>".__CLASS__."<br>Diện tích: ".$this->calculateArea();
        }
    }