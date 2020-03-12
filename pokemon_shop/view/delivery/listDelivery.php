<h2>Delivery</h2>
<a href="./delivery.php?page=addDelivery" class="btn btn-success" style="float:left;">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>Serial</th>
      <th>Shiper</th>
      <th>Order</th>
      <th>Date</th>
      <th>Status</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php foreach ($deliverys as $key => $delivery): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $delivery->id_shiper ?></td>
      <td><?php echo $delivery->orderNumber ?></td>
      <td><?php echo $delivery->requiredDate ?>
      <td><?php echo $delivery->status ?></td>
      <td> <a href="./delivery.php?page=editDelivery&id=<?php echo $delivery->id_delivery; ?>" title="Edit"><i class='fa fa-edit' style='font-size:25px; color:bluesky; margin:5px;'></i></a></td>
      <td> <a href="./delivery.php?page=deleteDelivery&id=<?php echo $delivery->id_delivery; ?>" title="Delete"><i class='fa fa-trash' style='font-size:25px; color:red; margin:5px;'></i></i></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>