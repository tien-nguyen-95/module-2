<?php
    include "Point3D.php";
    $point2D = new Point2D();
    $showPoint2D = $point2D->setXY(1,2)->toString();
    $point3D = new Point3D();
    $showPoint3D = $point3D->setXYZ(3,4,5)->toString();
?>