<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        tr,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    function createMatrix($row,$col){
        $matrix=[];
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $matrix[$i][$j] = rand(1, 100);
            }
        }
        return $matrix;
    }
    ?>
    <form method="POST">
        Nhập cạnh ma trận vuông:
        <input type="number" name="num" min="1" max="10">
        <input type="submit" value="Submit">
    </form>
</body>

</html>