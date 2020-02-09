<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['calculator'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
    }
    ?>
    <form action="" method='POST'>
        <p>Số đầu tiên: <input type="text" name="first" id="" value='<?php echo isset($first) ? $first : "" ?>'></p>
        <p>Số thứ hai: <input type="text" name="second" id="" value='<?php echo isset($second) ? $second : "" ?>'></p>
        <input type="submit" value="Tính toán" name='calculator'>
    </form>
    <?php
    //Exception try-catch
    
    class Calculator
    {
        var $x;
        var $y;
        function total($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
            return $this->x + $this->y;
        }
        function effect($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
            return $this->x - $this->y;
        }
        function product($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
            return $this->x * $this->y;
        }
        function divide($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
            return round($this->x / $this->y, 4);
        }
    }
    $result = "";
    $val = new Calculator();
    if (isset($_POST['calculator'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
        if ($second == 0 || ($first == 0 && $second == 0)) {
            try {
                throw new Exception("Value must be 1 or below");
            }
            catch (Exception $a) {
                echo $a->getMessage();
            }
        } else {
            $total = $val->total($first, $second);
            $effect = $val->effect($first, $second);
            $product = $val->product($first, $second);
            $divide = $val->divide($first, $second);
            echo 'Tổng: ' . $total . '<br>';
            echo 'Hiệu: ' . $effect . '<br>';
            echo 'Tích: ' . $product . '<br>';
            echo 'Thương: ' . $divide . '<br>';
        }
    }
    ?>
</body>
</html>