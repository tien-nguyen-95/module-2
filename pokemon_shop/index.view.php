<?php require "model/DBConnection.php";
require "model/ProductDB.php";
require "model/Product.php";
require "controller/ProductController.php";

use Controller\ProductController;
$controlProducts = new ProductController();
$productss = $controlProducts->productDB->getAll();
?>
<h2 >Pokemon Shop</h2>
<form method="post">
    <input type="submit" name="login" value="Login" >
</form>
<?php
    if(isset($_POST['login'])){
        header('Location: view/product/product.php');
    }
 ?>
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
  <tbody>
  <?php foreach ($productss as $key => $product): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->width ?></td>
      <td><?php echo $product->height ?>
      <td><?php echo $product->material ?></td>
      <td><?php echo $product->description ?></td>
      <td><?php echo $product->price ?></td>
    </tr>
   
  <?php endforeach; ?>
  </tbody>
</table>