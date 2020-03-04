<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Shop</title>
  <link rel="icon" href="/public/images/icon_pokeball.png">
  <link rel="stylesheet" href="/public/css/view.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="startTime()">
  <div class="container">
    <h2 >Welcome to Pokemon Shop</h2>
    <a style="margin-bottom:20px;" class="btn btn-primary"href="login/login.php">Log in</a>
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/images/three.jpg" alt="Los Angeles" width="1100" height="500">
      <div style="color:black;"class="carousel-caption">
        <h3>Coming Soon...</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/public/images/arceus.jpg" alt="Chicago" width="1100" height="500">  
      <div style="color:black;"class="carousel-caption">
        <h3>Coming Soon...</h3>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="/public/images/firedog.jpg" alt="New York" width="1100" height="500">
      <div style="color:black;" class="carousel-caption">
        <h3>Coming Soon...</h3>
      </div> 
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    <input style=" margin:10px 0px;" class="form-control mb-4" id="tableSearch" type="text" placeholder="Search..">
    <a  href="#" title="Home"><img class="logo" src="/public/images/logo.png" alt="Pokemon"></a>
    <div class="pokeball">
      <div class="pokeball__button"></div>
    </div>
   
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Serial</th>
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
            <td><img  class="zoom" src="<?= 'data:image;base64,' . base64_encode($product->image) ?> " width="60px"height="60px"></td>
            <td><?= "$".$product->price ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div><hr>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="public/js/search.js"></script>
  <script src="/public/js/time.js"></script>
    <footer style="font-size: 14px;">
        <div class="footer-copyright text-center py-1">
            <b>About Me:</b> <br>
            <a href="https://www.facebook.com/tien.tu.912" target="_blank"> Facebook: Tien Nguyen</a><br>
            <span>Email: quangtiennd95@gmail.com</span> <br>
            Time Sever: <span id="txt"></span>
            <?= "- " . date("d-m-Y", strtotime("+6 hours")) . "<br>"; ?>
        </div>
    </footer>
</body>
</html>