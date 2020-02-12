<?php
    class Fan
    {
        const  SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private int $speed;
        private $on ;
        private float $radius;
        private string $color;

        public function __construct()
        {
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }
    
        public function getSpeed()
        {
            return $this->speed;
        }

        public function getOn()
        {
            return $this->on;
        }

        public function getRadius()
        {
            return $this->radius;
        }

        public function getColor()
        {
            return $this->color;
        }
        
        // Trên get dưới set

        public function setSpeedFast()
        {
            $this->speed = self::FAST;
            return $this;
        }

        public function setSpeedMedium()
        {
            $this->speed = self::MEDIUM;
            return $this;
        }

        public function setSpeedSlow()
        {
            $this->speed = self::SLOW;
            return $this;
        }

        public function setOn($boolean)
        {
            $this->on = $boolean;
            return $this;
        }

        public function setRadius($radius)
        {
            $this->radius = $radius;
            return $this;
        }

        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }

        public function toString()
        {
            if ($this->on) {
                return "<br>Tốc độ: " . $this->speed . "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: Bật";
            } else {
                return "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: Tắt";
            }
        }
    }
    $fan = new Fan();
?>