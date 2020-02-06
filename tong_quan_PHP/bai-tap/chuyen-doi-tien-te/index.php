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

        br {
            clear: left;
        }
    </style>
</head>

<body>

    <div id="content">
        <h2>Chuyển đổi tiền tệ</h2>
        <form action="convert_money.php" method="POST">
            <div id="data">
                <label>Amount:</label>
                <input type="number" placeholder="Enter number.." name="amount"><br>
                <label>Select:</label>
                <select name="method">
                    <option value="1">USD => VND</option>
                    <option value="2">VND => USD</option>
                </select><br>
                <label></label>
            </div>
            <input type="submit" id="button" value="Convert">
            <span></span>
        </form>
    </div>

</body>

</html>