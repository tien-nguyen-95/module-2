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
            width: 20px;
            height: 20px;
        }
        #error{
            color: red;
        }
        #sum{
            color: blue;
        }
    </style>
</head>

<body>
    <?php

    function createMatrix($num){
        $matrix=[];
        for ($i = 0; $i < $num; $i++) {
            for ($j = 0; $j < $num; $j++) {
                $matrix[$i][$j] = rand(1, 100);
            }
        }
        return $matrix;
    }

    function showMatrix($matrix){
        $show = "<table><caption style = 'width:80px;'>Ma Trận</caption>";
        for ($i = 0; $i < count($matrix); $i++) {
            $show.="<tr>";
            for ($j = 0; $j < count($matrix); $j++) {
                $show.="<td>". $matrix[$i][$j] ."</td>";
            }
            $show.="</tr>";
        }
        $show.="</table>";
        return $show;
    }

    function totalDiagonal($matrix){
        $sum = 0;
        for($i = 0 ; $i < count($matrix) ; $i++){
            $sum += $matrix[$i][$i];
        }
        return $sum;
    }

    $sum = NULL;
    $show = NULL;
    try{
        if(isset($_POST["submit"])){
            $num = $_POST["num"];
            if(empty($num)){
                throw new Exception("Hãy nhập vào chỗ trống");
            }
            $matrix = createMatrix($num);
            $show = showMatrix($matrix);
            $sum = totalDiagonal($matrix);
        }
    }
    catch(Exception $e){
        $error = $e->getMessage();
    }
    ?>
    <form method="POST">
        Nhập cạnh ma trận vuông:
        <input type="number" name="num" min="1" max="10" placeholder="Nhập số...">
        <input type="submit" value="Submit" name="submit">
    </form>
    <span id="error"><?= $error?? NULL?></span><br>
    <div ><?= $show?? NULL?></div><br>
    <div id="sum"><?= empty($sum)?Null :"Tổng đường chéo chính: ".$sum ; ?></div>
</body>

</html>