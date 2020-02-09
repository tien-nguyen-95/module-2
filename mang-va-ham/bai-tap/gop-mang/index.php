<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gộp Mảng</title>
</head>
<body>
    <?php
        function mergeArray($array1,$array2){
            $arr = [];
            foreach($array1 as $value){
                $arr[] = $value;
            }
            foreach($array2 as $value){
                $arr[] = $value;
            }
            return $arr;
        }
        $array1 = [1,2,3,4,5];
        $array2 = [6,7,8,9,10];
        $array3 = mergeArray($array1,$array2);
        print_r($array3);
    ?>
</body>
</html>