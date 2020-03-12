<h1>Are you sure to delete this delivery ?</h1>
<form action="./delivery.php?page=deleteDelivery" method="post">
  <input type="hidden" name="id" value="<?= $delivery->id_delivery; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="delivery.php">Cancel</a>
  </div>
</form>