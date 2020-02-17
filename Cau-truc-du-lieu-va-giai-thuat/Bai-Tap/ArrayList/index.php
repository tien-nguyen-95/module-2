<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Triển khai các phương thức của ArrayList</title>
</head>
<body>
    <?php
    include 'MyList.php';
        $test = new MyList();
        $test->add(0,1);
        $test->add(0,2);
        $test->add(0,3);
        echo "size: ".$test->size()."<br>";
        print_r($test->clone());
        $test->remove(1);
        echo "<br>Remove index 1<br>";
        echo "size: ".$test->size()."<br>";
        print_r($test->clone());
        print_r($test->clear());
        echo "<br>Clear<br>";
        print_r($test->clone());


    ?>
</body>
</html>
