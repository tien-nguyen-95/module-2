<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyển đổi tiền tệ</title>
    <style>
        #content {
            width: 400px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        label {
            width: 150px;
            margin: 5px;
            float: left;
        }

        #data input,
        select {
            width: 200px;
            margin: 5px;
            float: left;
        }

        #button {
            color: blue;
            width: 100px;
            height: 30px;
        }

        #error {
            color: red;
        }

        #result {
            color: blue;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $method = $_POST["method"];
        $error = "";
        $result = "";
        if ($amount > 0 && is_numeric($amount) && floor($amount) == $amount) {
            $error = "";
            $result = "Result: ";
            switch ($method) {
                case 1:
                    $result = $amount * 23000 . " VND";
                    break;
                case 2:
                    $result = $amount / 23000 . " USD";
                    break;
            }
        } else {
            $error = "Invalid Value";
        }
    }
    ?>
    <div id="content">
        <h2>Chuyển đổi tiền tệ</h2>
        <form action="convert_money.php" method="POST">
            <div id="data">
                <label></label>
                <label id="error"><?= $error ?></label><br>
                <label>Amount:</label>
                <input type="number" placeholder="Enter number.." name="amount"><br>
                <label>Select:</label>
                <select name="method">
                    <option value="1">USD => VND</option>
                    <option value="2">VND => USD</option>
                </select><br>
                <label>Exchange Rate:</label>
                <label>1 USD= 23000 VND</label><br>
                <label></label>
                <label id="result"><?= $result ?></label><br>
                <label></label>
            </div>
            <input type="submit" id="button" value="Convert">
        </form>
    </div>

</body>

</html>