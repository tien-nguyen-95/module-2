<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Shop</title>
  <link rel="icon" href="/public/images/icon_pokeball.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="startTime()" style="background-color:burlywood;">

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/public/images/three.jpg"  width=100% height="500">
          <div style="color:black;"class="carousel-caption">
            <h3 style="color: red;">Welcome to Pokemon Shop</h3>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="/public/images/arceus.jpg"  width=100% height="500">  
          <div style="color:black;"class="carousel-caption">
            <h3 style="color: red;">Welcome to Pokemon Shop</h3>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="/public/images/firedog.jpg"  width=100% height="500">
          <div style="color:black;" class="carousel-caption">
            <h3 style="color: red;">Welcome to Pokemon Shop</h3>
          </div> 
        </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>    
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;background-color:darksalmon; ">

  <div class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="/index.php"><strong>Trang Chủ</strong></a>
    <a class="navbar-brand" href="./introduction.php"><strong>Giới Thiệu</strong></a>
    <a class="navbar-brand" href="./view.product.php"><strong>Sản Phẩm</strong></a>
    <a class="navbar-brand" href="#"><strong>Tin Tức</strong></a>
    <a class="navbar-brand" href="./contact.php"><strong>Liên Hệ</strong></a>
  </div>
  <hr>