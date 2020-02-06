<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #button input {
            float: left;
            margin-bottom: .5em;
        }

        #error {
            color: red;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
    <?php
    function caculator($Amount, $Rate, $Years)
    {
        for ($i = 1; $i <= $Years; $i++) {
            $Amount += ($Amount * ($Rate / 100));
        }
        return $Amount;
    }
    function check($num)
    {
        return is_numeric($num) && $num > 0 && floor($num) == $num;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Amount = $_POST["investment"];
        $Rate =  $_POST["rate"];
        $Years =  $_POST["years"];
        $error = "";
        $result = "";
        if (check($Amount) && check($Rate) && check($Years)) {
            $result = caculator($Amount, $Rate, $Years);

    ?>
            <div class="content">
                <h1>Future Value Calculator</h1>
                <form>
                    <div id="data">
                        <label>Investment Amount:</label>
                        <span><?= "$" . $Amount ?></span><br />
                        <label>Yearly Interest Rate:</label>
                        <span><?= $Rate . "%" ?></span><br />
                        <label>Number of Years:</label>
                        <span><?= $Years ?></span><br />
                        <label>Future Value:</label>
                        <span><?= "$" . $result ?></span><br />
                    </div>
                </form>
            </div>
        <?php
        } else {
            $error = "Wrong Input";

        ?>
            <div class="content">
                <h1>Future Value Calculator</h1>
                <form action="result.php" method="POST">
                    <div id="data">
                        <label>&nbsp;</label>
                        <P id="error"><?= $error ?></P>
                        <label>Investment Amount:</label>
                        <input type="text" name="investment" /><br />
                        <label>Yearly Interest Rate:</label>
                        <input type="text" name="rate" />%<br />
                        <label>Number of Years:</label>
                        <input type="text" name="years" />
                    </div>
                    <div id="buttons">
                        <label>&nbsp;</label>
                        <input type="submit" value="Calculate" /><br />
                    </div>
                </form>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>