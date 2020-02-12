<?php
    include_once ('Shape.php');
    include_once 'Resizeable.php';

    class Rectangle extends Shape implements Resizeable
    {
        public $width;
        public $height;

        public function __construct($name='Rectangle', $width=4, $height=3)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea(){
            return $this->height * $this->width;
        }

        public function calculatePerimeter(){
            return ($this->height + $this->width) * 2;
        }

        public function resize()
        {
            $this->width *= rand(1, 100);
            $this->height *= rand(1, 100);
            return $this;
        }

        public function toString()
        {
            return "<br>".__CLASS__."<br>Diện tích: ".$this->calculateArea();
        }
    }