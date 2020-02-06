<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển Thị Các Loại Hình</title>
    <style>
        #content {
            width: 300px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        select,
        input {
            margin: 5px;
        }

        #show {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    function rectangle()
    {
        $show = "";
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $show .= "*&nbsp;";
            }
            $show .= "<br>";
        }
        return $show;
    }
    function squareTriangleTopLeft()
    {
        $show = "";
        for ($i = 0; $i < 7; $i++) {
            for ($j = 6; $j > 0; $j--) {
                $show .= $j > $i ? '*' : '&nbsp;&nbsp;';
            }
            $show .= "<br>";
        }
        return $show;
    }
    function squareTrianglebTopRight()
    {
        $show = "";
        for ($i = 0; $i < 7; $i++) {

            for ($j = 0; $j < 6; $j++) {
                $show .= $j >= $i ? '*' : '&nbsp;&nbsp;';
            }
            $show .= "<br>";
        }
        return $show;
    }
    function squareTriangleBottomLeft()
    {
        $show = "";
        for ($i = 0; $i < 7; $i++) {

            for ($j = 0; $j < 6; $j++) {
                $show .= $j < $i ? '*' : '&nbsp;&nbsp;';
            }
            $show .= "<br>";
        }
        return $show;
    }
    function squareTriangleBottomRight()
    {
        $show = "";
        for ($i = 0; $i < 7; $i++) {
            for ($j = 6; $j > 0; $j--) {
                $show .= $j <= $i ? '*' : '&nbsp;&nbsp;';
            }
            $show .= "<br>";
        }
        return $show;
    }
    function isoscelesTriangle()
    {
        $show = "";
        $peak = 10;
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j <= 2 * $peak; $j++) {
                if ($j >= $peak - $i && $j <= $peak + $i) {
                    $show .= "*";
                } else {
                    $show .= '&nbsp;&nbsp;';
                }
            }
            $show .= "<br>";
        }
        return $show;
    }
    function showForm($show)
    {
    ?>
        <div id="content">
            <h2>Hiển Thị Các Loại Hình</h2>
            <form action="print.php" method="POST">
                <strong>Menu:</strong><br>
                <select name="shape">
                    <option value="1">Print the rectangle</option>
                    <option value="2">Print the square triangle(top-left)</option>
                    <option value="3">Print the square triangle(top-right)</option>
                    <option value="4">Print the square triangle(botton-left)</option>
                    <option value="5">Print the square triangle(botton-right)</option>
                    <option value="6">Print isosceles triangle</option>
                </select><br>
                <input type="submit" value="Print">
            </form><br>
            <div id="show">
                <h3>Result:</h3><br>
                <?= $show ?>
            </div>
        </div>
    <?php
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shape = $_POST["shape"];
        $show = "";
        switch ($shape) {
            case 1:
                $show = rectangle();
                break;
            case 2:
                $show = squareTriangleTopLeft();
                break;
            case 3:
                $show = squareTrianglebTopRight();
                break;
            case 4:
                $show = squareTriangleBottomLeft();
                break;
            case 5:
                $show = squareTriangleBottomRight();
                break;
            case 6:
                $show = isoscelesTriangle();
                break;
        }
        showForm($show);
    }
    ?>
</body>

</html>