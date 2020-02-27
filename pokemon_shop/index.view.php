<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Shop</title>
  <link rel="icon" href="/public/images/icon_pokeball.png">
  <link rel="stylesheet" href="/public/css/view.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2 style="color:red; font-weight: 600;">Welcome to Pokemon Shop</h2>
    <input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text" placeholder="Search..">
    <form method="POST" style="margin:10px;">
      <input type="submit" name="login" value="Login">
    </form>
    <a href="index.php" title="Home"><img class="logo" src="/public/images/titlepkm.png" alt="Pokemon"></a>
    <div class="pokeball">
      <div class="pokeball__button"></div>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>STT</th>
          <th>Name</th>
          <th>Width</th>
          <th>Height</th>
          <th>Material</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <?php foreach ($productss as $key => $product) : ?>
          <tr>
            <td><?= ++$key ?></td>
            <td><?= $product->productName ?></td>
            <td><?= $product->width ?></td>
            <td><?= $product->height ?>
            <td><?= $product->material ?></td>
            <td><?= $product->description ?></td>
            <td><?= $product->price ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="public/js/search.js"></script>
</body>
</html>