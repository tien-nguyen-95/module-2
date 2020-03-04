
<h2>Order List</h2>
<a href="./order.php?page=addOrder" class="btn btn-success" style="float:left;">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>Serial</th>
      <th>Customer</th>
      <th>Product</th>
      <th>Date</th>
      <th>Quantity</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php foreach ($orders as $key => $order): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $order->name ?></td>
      <td><?php echo $order->productName ?></td>
      <td><?php echo $order->orderDate ?>
      <td><?php echo $order->quantity ?></td>
      <td> <a href="./order.php?page=editOrder&id=<?php echo $order->orderNumber; ?>" title="Edit"><i class='fa fa-edit' style='font-size:25px; color:bluesky; margin:5px;'></i></a></td>
      <td> <a href="./order.php?page=deleteOrder&id=<?php echo $order->orderNumber; ?>" title="Delete"><i class='fa fa-trash' style='font-size:25px; color:red; margin:5px;'></i></i></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>