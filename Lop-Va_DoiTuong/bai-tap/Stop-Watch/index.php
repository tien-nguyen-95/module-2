
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stop Watch</title>
</head>

<body>
    <h2>Stop Watch</h2>
    <?php
    class StopWatch
    {
        private static $startTimes = array();

        public static function start($timerName = 'default')
        {
            self::$startTimes[$timerName] = microtime(true);
        }
    
        public static function elapsed($timerName = 'default')
        {
            return microtime(true) - self::$startTimes[$timerName];
        }
    }

    StopWatch::start();
    $array = [];
    for ($i = 0; $i < 30; $i++) {
        for ($j = 0; $j < 30; $j++) {
            $number = rand(1, 100000);
            array_push($array, $number);
        }
    }
    $result = sort($array);
    foreach ($array as $key=> $value) {
        if($key % 30==0) echo "<br>";
        echo $value . ', ';
    }

    echo 'Elapsed time: ' . StopWatch::elapsed() . ' seconds';
    ?>
</body>

</html>