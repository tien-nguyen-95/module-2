<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm giá trị lớn nhất</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td,tr{
            border: 1px solid black;
            height: 30px;
            width: 30px;
            padding: 1em;
        }
        #data {
            border: 1px solid black;
            width: 250px;
            padding: 1em;
        }

        label,span,
        input {
            float: left;
            width: 100px;
            margin: 5px;
        }
        #error{
            color:red;
        }
        br {
            clear: left;
        }
    </style>
</head>

<body>
    <?php
    $error = NULL;
    $show = NULL;
    $postition=NULL;
    $showMax=NULL;
    function findMax($array,$row){
        $maxRow = [];
        for ($i = 0; $i < $row; $i++) {
            $maxRow[$i]=max($array[$i]);
        }
        return max($maxRow);
    }
    function findIndexMax($array,$row,$col,$max){
        $position="Vị trí : ";
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                if ($max == $array[$i][$j]) {
                    $position.=" [".$i."-".$j."] ";
                }
            }
        }
        return $position;
    }

    function createMatrix($row,$col){
        $matrix=[];
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $matrix[$i][$j] = rand(1, 100);
            }
        }
        return $matrix;
    }

    function showMatrix($matrix,$row,$col){
        $show = "<table><caption>Ma Trận</caption>";
        for ($i = 0; $i < $row; $i++) {
            $show.="<tr>";
            for ($j = 0; $j < $col; $j++) {
                $show.="<td>". $matrix[$i][$j] ."</td>";
            }
            $show.="</tr>";
        }
        $show.="</table>";
        return $show;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $row = (int) $_POST["row"];
        $col = (int) $_POST["col"];
        $matrix = [];
        if ($row != null && $col != null) {
            $error = NULL;
            $matrix = createMatrix($row,$col);
            $show = showMatrix($matrix,$row,$col);
            $max = findMax($matrix,$row);
            $postition = findIndexMax($matrix,$row,$col,$max);
            $showMax = "Số lớn nhất: " . $max;
        } else {
            $error = "Hãy nhập đầy đủ";
        }
    }
    ?>
     <h1>Tìm giá trị lớn nhất</h1>
    <div id="data">
        <form method="POST">
            <label></label>
            <span id="error"><?= $error ?></span><br>
            <label>Nhập hàng:</label>
            <input type="number" min="3" max="10" name="row"><br>
            <label>Nhập cột:</label>
            <input type="number" min="3" max="10" name="col"><br>
            <label></label>
            <input type="submit" value="Tìm Max"><br>
        </form>
    </div>
    <div><?=$show?></div>
    <div><?=$showMax?></div>
    <div><?=$postition?></div>
</body>

</html>