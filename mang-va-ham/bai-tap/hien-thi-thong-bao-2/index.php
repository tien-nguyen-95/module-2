<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "14 36 56 30 11 69 43 81 11 92 27 61 26 82 12 92 68 86 91 61 12
         13 9 22 44 17 52 29 18 19 51 3 70 22 34 49 28 35 8 83 46 40 12 66 11 57
          20 0 3 93 60 35 99 77 36 40 6 51 73 32 90 20 81 66 78 82 7 51 72 24 29
           22 57 14 94 43 65 76 48 83 88 11 78 78 73 40 80 50 83 26 28 56 22 15 73 94 93 38 95 40";
        $arr = explode(" ",$str);

        if(isset($_POST["submit"])){
            $index = $_POST["index"];
            try{
                if(empty($index)){
                    throw new Exception("Hãy nhập chỉ số");
                }
                if($index < 0 || $index >= 100){
                    throw new Exception("Chỉ số không hợp lệ");
                }
                $result = $arr[$index];
            }
            
            catch(Exception $e){
                $error = $e->getMessage();
            }
        }
    ?>
    <form method="POST">
        Mảng:<br>
        <span><?= $str?></span><br>
        Nhập chỉ số:<br>
        <input type="number" name="index" >
        <input type="submit" name="submit" value="Tìm">
    </form>
    <span style="color:red;"><?= $error?? NULL ?></span>
    <span style="color:blue;"><?= $result?? NULL ?></span>
</body>
</html>