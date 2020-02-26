<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Shop</title>
    <link rel="icon" type="image/ico" href="public/icon_pokeball.png">
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post">
<input type="submit" name="product" value="Product">
    <input type="submit" name="shiper" value="Shiper">
    <input type="submit" name="order" value="Order">
    <input type="submit" name="logout" value="Log out">
</form>
<h1>Shiper</h1>
<table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Time-Work</th>
            <th>Action</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?= $result->id_shiper ?></td>
                <td><?= $result->name ?></td>
                <td><?= $result->age ?></td>
                <td><?= $result->phone ?></td>
                <td><?= $result->email ?></td>
                <td><?= $result->timework ?></td>
                <td><input type="submit" name="update" value="Update"><input type="submit" name="delete" value="Delete"></td>
                
            </tr>
        <?php endforeach;
            
         ?>
    </table>
</body>
</html>