<?php
    include 'MoveablePoint.php';
    $point = new Point();
    $moveAblePoint = new MoveablePoint();
    $showPoint = $point->setXY(3,2)->toString();
    $showMovePoint = $moveAblePoint->setXY(8,8)->setXYspeed(9,9)->move()->toString();
?>