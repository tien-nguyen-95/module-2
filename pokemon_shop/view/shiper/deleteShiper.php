
<h1>Are you sure to delete <?php echo $shiper->name; ?> ?</h1>
<form action="./shiper.php?page=deleteShiper" method="post">
  <input type="hidden" name="id" value="<?php echo $shiper->id_shiper; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="shiper.php">Cancel</a>
  </div>
</form>