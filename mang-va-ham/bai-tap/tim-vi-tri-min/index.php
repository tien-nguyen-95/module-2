<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm giá trị nhỏ nhất</title>
</head>

<body>
    <?php
        function findIndexMin($array)
        {

            $minArr = min($array);
            $index = [];
            for ($i = 0; $i < count($array); $i++) {
                if ($minArr == $array[$i]) {
                    array_push($index, $i);
                }
            }
            return $index;
        }
        $array = [1, 5, -3, 7, 4, 0, -3, 10];
        $indexs = findIndexMin($array);
        echo "Vị trí phần tử nhỏ nhất: ";
        foreach ($indexs as $index) {
            echo "<br>" . $index;
        }
    ?>
</body>

</html>