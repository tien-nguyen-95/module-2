<?php
     class Point2D
     {
         protected float $x ;
         protected float $y ;
         public function __construct($x =0.0, $y=0.0)
         {
             $this->x = $x;
             $this->y = $y;
         }

         public function getX()
         {
             return $this->x;
         }

         public function getY()
         {
             return $this->y;
         }

         public function setX($x)
         {
             $this->x = $x;
             return $this;
         }

         public function setY($y)
         {
             $this->y = $y;
             return $this;
         }

         public function setXY($x, $y)
         {
             $this->x = $x;
             $this->y = $y;
             return $this;
         }

         public function getXY()
         {
             return [$this->x, $this->y];
         }

         public function toString()
         {
             return  "<br>( $this->x , $this->y )";
         }
     }
?>