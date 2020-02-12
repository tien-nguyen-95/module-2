<?php
    include 'Fan.php';
    $fan1 = new Fan();
    $fan2 = new Fan();
    $showFan1 = $fan1->setOn(true)->setSpeedFast()->setRadius(10)->setColor("yellow")->toString();
    $showFan2 = $fan2->setOn(false)->setRadius(5)->setColor("blue")->toString();
?>