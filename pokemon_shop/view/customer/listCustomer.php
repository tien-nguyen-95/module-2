
<h2>Customer List</h2>
<a href="./customer.php?page=addCustomer" class="btn btn-success" style="float:left;">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>Serial</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Address</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php foreach ($customers as $key => $customer): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $customer->name ?></td>
      <td><?php echo $customer->phone ?></td>
      <td><?php echo $customer->email ?>
      <td><?php echo $customer->address ?></td>
      <td> <a href="./customer.php?page=editCustomer&id=<?php echo $customer->id_customer; ?>" title="Edit"><i class='fa fa-edit' style='font-size:25px; color:bluesky; margin:5px;'></i></a></td>
      <td> <a href="./customer.php?page=deleteCustomer&id=<?php echo $customer->id_customer; ?>" title="Delete"><i class='fa fa-trash' style='font-size:25px; color:red; margin:5px;'></i></i></a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>