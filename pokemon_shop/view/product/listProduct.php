
<h2>Product List</h2>
<a href="./product.php?page=addProduct" class="btn btn-success" style="float:left;">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>Serial</th>
      <th>Name</th>
      <th>Width</th>
      <th>Height</th>
      <th>Material</th>
      <th>Image</th>
      <th>Price</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php foreach ($products as $key => $product): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $product->productName ?></td>
      <td><?php echo $product->width ?></td>
      <td><?php echo $product->height ?>
      <td><?php echo $product->material ?></td>
      <td><img   src="<?= 'data:image;base64,' . base64_encode($product->image) ?> " width="60px"height="60px"></td>
      <td><?php echo "$".$product->price ?></td>
      <td> <a href="./product.php?page=editProduct&id=<?php echo $product->productCode; ?>" title="Edit"><i class='fa fa-edit' style='font-size:25px; color:bluesky; margin:5px;'></i></a></td>
      <td> <a href="./product.php?page=deleteProduct&id=<?php echo $product->productCode; ?>" title="Delete"><i class='fa fa-trash' style='font-size:25px; color:red; margin:5px;'></i></i></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>