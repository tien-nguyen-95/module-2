<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($student as $value):?>
            <li><?=$value?></li>
        <?php endforeach; ?>
    </ul>
<br>
  <ul>
  @foreach ($student as $stu)
            <li><?= $stu ?></li>
  @endforeach



  </ul>
</body>
</html>
