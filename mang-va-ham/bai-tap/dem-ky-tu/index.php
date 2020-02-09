  
<?php

function countStr($str, $text)
{
    $count = 0;
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == $text) {
      $count++;
    }
  }
  return $count;
}

$error = null;

if (isset($_POST['submit'])) {
  $str = $_POST['str'];
  $text = $_POST['text'];
  $count = countStr($str, $text);
  try {
    if (empty($str) || empty($text)) {
      throw new Exception("Hãy nhập đầy đủ");
    }
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đếm ký tự</title>
</head>

<body>
    <form action="" method='POST'>
        Nhập chuỗi bất kỳ: <br>
        <input type="text" name='str' value="<?php echo isset($str) ? $str : '' ?>"><br><br>
        Nhập ký tự cần kiểm tra: <br>
        <input type="text" name='text' value="<?php echo isset($text) ? $text : '' ?>"><br><br>
        <input type="submit" value="Kiểm tra" name='submit'><br>
    </form>
    <span><?= $error ?? NULL?></span>
    <span><?= (!empty($str) && !empty($text)) ? "Kết quả: " . $count : ''; ?></span>
</body>

</html>