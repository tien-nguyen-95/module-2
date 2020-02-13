<?php
    include 'StopWatch.php';
    $time = new StopWatch();
    $time->start();
    $sum = 0;
    for($i = 1; $i <= 1000 ; $i++){
        $sum += $i;
    }
    $time ->stop();
    $sumTime = $time->getElapsedTime()*1000;
    
    $timeStart = date('Y/m/d H:i:s', $time->getStart());
   
    $timeStop = date('Y/m/d H:i:s', $time->getEnd());
    include 'index.view.php';