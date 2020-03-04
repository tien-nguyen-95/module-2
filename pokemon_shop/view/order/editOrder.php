
<h2>Update</h2>
<form method="post" action="./order.php?page=editOrder">
    <input type="hidden" name="id" value="<?php echo $order->orderNumber; ?>"/>
    <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="id_customer" value="<?php echo $order->id_customer; ?>"required>
        </div>
        <div class="form-group">
            <label>Product</label>
            <input type="text" class="form-control" name="productCode" value="<?php echo $order->productCode; ?>"required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="orderDate" value="<?php echo $order->orderDate; ?>" required>
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" name="quantity" value="<?php echo $order->quantity; ?>" required>
        </div>
    <div class="form-group">
        <input type="submit" value="Confirm" class="btn btn-primary"/>
        <a href="order.php" class="btn btn-default">Cancel</a>
    </div>
</form>