<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Từ Điển</title>
</head>
<body>

    <form action="/dictionary" method="post">
        @csrf
        <input type="text" name="input" placeholder="nhập từ cần tìm...">
        <input type="submit" value="Dịch">
    </form>
</body>
</html>
