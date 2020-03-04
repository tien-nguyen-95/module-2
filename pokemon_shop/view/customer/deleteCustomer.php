
<h1>Are you sure to delete <?php echo $customer->name; ?> ?</h1>
<form action="./customer.php?page=deleteCustomer" method="post">
  <input type="hidden" name="id" value="<?php echo $customer->id_customer; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="customer.php">Cancel</a>
  </div>
</form>