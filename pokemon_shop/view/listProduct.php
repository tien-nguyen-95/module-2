<h2>Product List</h2>
<a href="./index.php?page=addProduct" class="btn btn-success">Add</a>
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
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $key => $product): ?>
  <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->width ?></td>
      <td><?php echo $product->height ?>
      <td><?php echo $product->material ?></td>
      <td><?php echo $product->description ?></td>
      <td><?php echo $product->price ?>
      <td> <a href="./index.php?page=editProduct&id=<?php echo $product->productCode; ?>" class="btn btn-sm">Update</a></td>
      <td> <a href="./index.php?page=deleteProduct&id=<?php echo $product->productCode; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      
   
  <?php endforeach; ?>
  </tbody>
</table>