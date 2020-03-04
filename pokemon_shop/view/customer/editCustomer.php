
<h2>Update</h2>
<form method="post" action="./customer.php?page=editCustomer">
    <input type="hidden" name="id" value="<?php echo $customer->customerCode; ?>"/>
    <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $customer->name; ?>"required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $customer->phone; ?>"required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $customer->email; ?>" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $customer->address; ?>" required>
        </div>
    <div class="form-group">
        <input type="submit" value="Confirm" class="btn btn-primary"/>
        <a href="customer.php" class="btn btn-default">Cancel</a>
    </div>
</form>