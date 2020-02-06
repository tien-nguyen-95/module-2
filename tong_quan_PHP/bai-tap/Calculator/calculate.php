<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
    <style>
        fieldset {
            width: 420px;
        }

        label,
        input {
            float: left;
            width: 150px;
            padding: 5px;
            margin: 5px;
        }

        select {
            float: left;
            width: 163px;
            padding: 5px;
            margin: 5px;
        }

        br {
            clear: left;
        }

        #error {
            color: red;
        }

        #result {
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    function checkNum($num)
    {
        return is_numeric($num) && $num != NULL;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstNum = (float) $_POST["first"];
        $secondtNum = (float) $_POST["second"];
        $operator = $_POST["operator"];
        $result = 0;

        if (checkNum($firstNum) && checkNum($secondtNum)) {
            switch ($operator) {
                case '+':
                    $result = $firstNum + $secondtNum;
                    break;
                case '-':
                    $result = $firstNum - $secondtNum;
                    break;
                case 'x':
                    $result = $firstNum * $secondtNum;
                    break;
                case ':':
                    $result = $firstNum / $secondtNum;
                    break;
            }
    ?>
            <h1>Simple Calculator</h1>
            <fieldset>
                <legend>Calculator</legend>
                <form action="calculate.php" method="POST">
                    <label>First operand:</label>
                    <input type="text" name="first"><br>
                    <label>Operator:</label>
                    <select name="operator">
                        <option value="+" checked>+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value=":">:</option>
                    </select>
                    <br>
                    <label>Second operand:</label>
                    <input type="text" name="second"><br>
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"><br>
                    <span id="result">Result:
                        <?php echo $firstNum . $operator . $secondtNum . " = " . $result; ?>
                    </span>
                </form>
            </fieldset>
        <?php
        } else {
        ?>
            <h1>Simple Calculator</h1>
            <fieldset>
                <legend>Calculator</legend>
                <form action="calculate.php" method="POST">
                    <label>&nbsp;</label>
                    <label id="error">Wrong Input</label>
                    <label>First operand:</label>
                    <input type="text" name="first"><br>
                    <label>Operator:</label>
                    <select name="operator">
                        <option value="+" checked>+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value=":">:</option>
                    </select>
                    <br>
                    <label>Second operand:</label>
                    <input type="text" name="second"><br>
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate">
                </form>
            </fieldset>
    <?php
        }
    }
    ?>
</body>

</html>