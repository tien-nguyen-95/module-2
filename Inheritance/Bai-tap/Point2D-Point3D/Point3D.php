<?php
    include "Point2D.php";
    class Point3D extends Point2D
    {
        private float $z;
        public function __construct( $x = 0.0, $y = 0.0, $z = 0.0)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }

        public function getZ()
        {
            return $this->z;
        }

        public function setZ($z)
        {
            $this->z = $z;
            return $this;
        }

        public function setXYZ($x, $y, $z)
        {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
            return $this;
        }

        public function getXYZ()
        {
            return [$this->x, $this->y, $this->z];
        }

        public function toString()
        {
            return"<br>( $this->x , $this->y , $this->z )";
        }
    }
?>