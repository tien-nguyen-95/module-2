
<h2>Payment</h2>
<a href="#" class="btn btn-success" style="float:left;">Add</a>
<input style=" width:1000px;float:right;" class="form-control mb-4" id="tableSearch" type="text"
    placeholder="Search..">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th>Serial</th>
      <th>Customer</th>
      <th>Date</th>
      <th>Payment</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <?php foreach ($payments as $key => $payment): ?>
    <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $payment->customer ?></td>
      <td><?php echo $payment->date ?></td>
      <td><?php echo $payment->payment ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
  <tbody id="myTable">
  </tbody>
</table>