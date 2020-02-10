<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fan
    {
        const  SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private int $speed = self::SLOW;
        private $on = false;
        private float $radius = 5;
        private string $color = "blue";
        
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
            if ($this->on == true) {
                return "<br>Tốc độ: " . $this->speed . "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: on";
            } else {
                return "<br>Màu:" . $this->color . "<br>Bán kính :" . $this->radius ."<br>Trạng thái: off";
            }
        }
    }
    
    $fan1 = new Fan();
    $fan2 = new Fan();
    $fan1->setSpeedFast()->setRadius(10)->setColor("yellow")->setOn(true);
    $fan2->setSpeedMedium()->setRadius(5)->setColor("blue")->setOn(false);
    echo "Quạt 1:".$fan1->toString()."<br> Quạt 2:".$fan2->toString();

    ?>
</body>
</html>