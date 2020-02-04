<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style> 
            input[type=number] {
                width: 200px;
                font-size: 16px;
                border: 2px solid #ccc; 
                border-radius: 4px;
                padding: 12px 10px 12px 10px;
            }
            #submit {
                border-radius: 2px;
                padding: 10px 32px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <h2>Chuyển số thành chữ</h2>
        <form method="POST">
            <input type="number" min="0" max="999" name="num" placeholder="số cần chuyển"/>
            <input type = "submit" id = "submit" value = "Tìm"/>
        </form> 
        <?php require 'readNum.php' ?>
    </body>
</html>