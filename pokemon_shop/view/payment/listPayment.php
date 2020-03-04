<?php require "/module2/pokemon_shop/view/partials/head.php"; ?>
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
      <th>Amount</th>
      <th colspan="2">Action</th>
  </tr>
  </thead>
  <tbody id="myTable">
  </tbody>
</table>