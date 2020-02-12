<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuadraticEquation</title>
</head>
<body><?php include "index.php" ?>
    <form method="POST">
        Nhập a:<br><input type="text" name="a" value="<?= $a?? NULL?>" ><br><br>
        Nhập b:<br><input type="text" name="b" value="<?= $b?? NULL?>" ><br><br>
        Nhập c:<br><input type="text" name="c" value="<?= $c?? NULL?>" ><br><br>
        <span style="color: red;"><?= $error?? NULL ?></span><br>
        <input type="submit" value="Kết quả" name='submit'><br>
        <span style="color: blue;"><?= $result?? NULL ?></span><br>
    </form>
    
</body>
</html>