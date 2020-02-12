<?php
class Triangle
{
    private $side1 ;
    private $side2 ;
    private $side3 ;
    private $color;

    public function __construct($side1 = 1.0 , $side2 = 1.0 , $side3 = 1.0 )
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = 'black';
    }

    public function getColor(){
        return $this->color;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
        return $this;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
        return $this;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
        return $this;
    }

    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        //P là nửa chu vi . Sử dụng công thức Heron
        $P = $this->getPerimeter() / 2;
        return pow($P * ($P - $this->side1) * ($P - $this->side2) * ($P - $this->side3) , 0.5);
    }

    public function toString(){
        return "<br>Cạnh 1: $this->side1<br>Cạnh 2: $this->side2<br>Cạnh 3: $this->side3
                <br>Màu: ".$this->getColor()."<br>Chu vi : ".$this->getPerimeter()."<br>Diện tích: ".$this->getArea();
    }
}