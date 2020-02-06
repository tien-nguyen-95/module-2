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
    </style>
</head>

<body>
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
        </form>
    </div>

</body>

</html>