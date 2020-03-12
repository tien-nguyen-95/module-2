
<h2>Update</h2>
<form method="post" action="./shiper.php?page=editShiper">
    <input type="hidden" name="id" value="<?php echo $shiper->id_shiper; ?>"/>
    <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $shiper->name; ?>"required>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="birthday" value="<?php echo $shiper->birthday; ?>"required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $shiper->phone; ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $shiper->email; ?>" required>
        </div>
        <div class="form-group">
            <label>TimeWork</label>
            <input type="text" class="form-control" name="timework" value="<?php echo $shiper->timework; ?>" >
        </div>
    <div class="form-group">
        <input type="submit" value="Confirm" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>