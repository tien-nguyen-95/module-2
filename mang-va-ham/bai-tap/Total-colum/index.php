<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng các số ở một cột xác định</title>
    <style>
        input,label{
            width: 120px;
            margin: 5px;
            padding: 10px;
            float: left;
        }
        br{
            clear: left;
        }
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

        function totalCol($matrix,$row,$indexCol){
            $sum = 0;
            for($i = 0; $i < $row ; $i++){
                $sum += $matrix[$i][$indexCol];
            }
            return $sum;
        }
        
            if(isset($_POST["submit"])){
                $row = $_POST["row"];
                $col = $_POST["col"];
                $indexCol = $_POST["indexCol"];
                try{
                    if(empty($row) || empty($col) || empty($indexCol)){
                        throw new Exception("Hãy nhập đầy đủ thông tin");
                    }
                    if(isset($row) && isset($col) && isset($indexCol) && $indexCol>= $col){
                        throw new Exception("Cột có index=$indexCol không tồn tại");
                    }
                    $matrix = createMatrix($row,$col);
                    $show = showMatrix($matrix,$row,$col);
                    $sum = totalCol($matrix,$row,$indexCol);
                    }
                catch(Exception $e){
                    $error = $e->getMessage();
                }
            }

    ?>
    <form method="POST">
        <h1>Tính tổng các số ở một cột xác định</h1>
        <label>Nhập hàng: </label><input type="number" name="row" min="1" max="10" value="<?= isset($row)? $row:NULL ?>"><br>
        <label>Nhập cột: </label><input type="number" name="col" min="1" max="10" value="<?= isset($col)? $col:NULL?>"><br>
        <label>Nhập cột cần tính: </label><input type="number" name="indexCol" min="1" max="10"  value="<?= isset($indexCol)? $indexCol:NULL?>">
        <input type="submit" name="submit" value="Tính"><br>
    </form>
    <label></label>
    <span id="error"><?= $error?? NULL?></span><br>
    <div ><?= $show?? NULL?></div><br>
    <div id="sum"><?= empty($sum)?Null :"Tổng cột có index = ". $indexCol.": ".$sum ; ?></div>
</body>
</html>