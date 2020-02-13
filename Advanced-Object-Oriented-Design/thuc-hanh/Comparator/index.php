<?php
    include "CircleComparator.php";
    $circleOne = new Circle("circleOne", 6);
    $circleTwo = new Circle("circleTwo", 4);
    $circleComparator = new CircleComparator();
    $test = $circleComparator->compare($circleOne, $circleTwo);
    include "index.view.php";
?>