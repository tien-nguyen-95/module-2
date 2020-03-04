
<h1>Are you sure to delete this order ?</h1>
<form action="./order.php?page=deleteOrderr" method="post">
  <input type="hidden" name="id" value="<?= $order->orderNumber; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="order.php">Cancel</a>
  </div>
</form>