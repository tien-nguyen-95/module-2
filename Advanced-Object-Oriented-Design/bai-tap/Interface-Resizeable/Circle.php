<?php
    include_once ('Shape.php');
    include_once 'Resizeable.php';

    class Circle extends Shape implements Resizeable
    {
        public $radius;

        public function __construct($name='Circle', $radius=2)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }

        public function calculatePerimeter(){
            return pi() * $this->radius * 2;
        }

        public function resize()
        {
            $this->radius *= rand(1, 100);
            return $this;
        }

        public function toString()
        {
            return "<br>".__CLASS__."<br>Diện tích: ".$this->calculateArea();
        }
    }