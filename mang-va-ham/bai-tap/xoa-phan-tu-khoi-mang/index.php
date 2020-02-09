<?php
    function find($arr, $num) {
        foreach($arr as $index => $value){
            if($value == $num) {
                return $index;
            }
        }
        return -1;
    }

    function remove($arr, $index){
        for($i = $index ; $i < count($arr)-1 ; $i++){
            $arr[$i]= $arr[$i + 1];
        }
        array_pop($arr);
        return $arr;
    }

    $error = null;
    $arr = [1,32,6,76,34,89,23];
        if(isset($_POST['submit'])){
            $num = $_POST['index'];
            try{
                if(empty($num)){
                    throw new Exception("Hãy nhập số");
                }
            }
            catch(Exception $e){
                $error = $e->getMessage();
            }
            
            $index =find($arr, $num);
            $newArr = $index==-1? $arr:remove($arr, $index);
        }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Phần Tử Khỏi Mảng</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <span><?php echo implode(" , " , $arr);?><br><br>
        <input type="number" name="index" placeholder="nhập số cần xóa">
        <input type="submit" name="submit" value="Xoá"><br>
        <span><?= $error ?? NULL?></span>
        <span><?php echo $error? "":implode(" , " , $newArr);?><br><br>
    </form>
</body>
</html>