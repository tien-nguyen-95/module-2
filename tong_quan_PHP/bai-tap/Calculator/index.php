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
    </style>
</head>

<body>
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
            <input type="submit" value="Calculate">
        </form>
    </fieldset>
</body>

</html>