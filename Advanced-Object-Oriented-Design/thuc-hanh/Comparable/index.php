<?php
    include "ComparableCircle.php";
    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 2); 
    $test = $circleOne->compareTo($circleTwo);
    include "index.view.php";
?>