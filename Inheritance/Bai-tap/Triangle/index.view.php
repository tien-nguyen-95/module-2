<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'index.php'?>
    <form method="POST">
        Nhập cạnh 1:<br>
        <input type="text" name="side1" placeholder="nhập số.."><br>
        Nhập cạnh 2:<br>
        <input type="text" name="side2" placeholder="nhập số.."><br>
        Nhập cạnh 3:<br>
        <input type="text" name="side3" placeholder="nhập số.."><br>
        Nhập màu:<br>
        <input type="text" name="color" placeholder="nhập màu.."><br>
        <span id="error"><?=$error?? NULL?></span><br>
        <input type="submit" name="submit" value="Kết Quả">
    </form>
    <div id="result"><?=$result?? NULL?></div>
</body>
</html>