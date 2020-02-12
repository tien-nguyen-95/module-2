<?php
    include 'Point.php';
    class MoveablePoint extends Point {
        private float $xSpeed ;
        private float $ySpeed ;

    public function __construct($xSpeed= 0.0, $ySpeed= 0.0)
    {
        $this->xSpeed = $xSpeed ;  
        $this->ySpeed = $ySpeed;
    }

    public function getXspeed(){
        return $this->xSpeed;
    }

    public function getYspeed(){
        return $this->ySpeed;
    }

    public function setXspeed($xSpeed){
        $this->xSpeed = $xSpeed;
        return $this;
    }

    public function setYspeed($ySpeed){
        $this->ySpeed = $ySpeed;
        return $this;
    }

    public function setXYspeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed ;
        $this->ySpeed = $ySpeed;
        return $this;
    }

    public function getXYspeed(){
        return [$this->xSpeed , $this->ySpeed];
    }

    public function toString()
    {
        return " <br>( $this->x , $this->y ), speed: ($this->xSpeed , $this->ySpeed )" ;
    }
    
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }
}