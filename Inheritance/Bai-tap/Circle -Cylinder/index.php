<?php
    include 'Cylinder.php';
    
    $circle = new Circle();
    $showCircle = $circle->setColor('green')->setRadius(5)->toString();

    $cylinder = new Cylinder();
    $showCylinder = $cylinder->setColor('blue')->setRadius(4)->setHeight(4)->toString();
    include 'index.view.php';
?>