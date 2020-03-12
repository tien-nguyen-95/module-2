<?php 
    require "../../model/ProductDB.php";
    require "../../model/Product.php";
    require "../../model/CustomerDB.php";
    require "../../model/Customer.php";
    use Model\ProductDB;
    use Model\CustomerDB;
    use Model\DBConnection;
    $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
    $productDB = new ProductDB($connection->connect());
    $products = $productDB->getAll();
    $customerDB = new CustomerDB($connection->connect());
    $customers = $customerDB->getAll();
?>
<h2>Update</h2>
<form method="post" action="./order.php?page=editOrder">
    <input type="hidden" name="id" value="<?php echo $order->orderNumber; ?>"/>
        <div class="form-group">
            <label>Customer</label>
            <select name="id_customer" >
                <?php foreach ($customers as $key => $customer): ?>
                    <option value="<?= $customer->id_customer; ?>" <?= $customer->id_customer==$order->id_customer? 'selected': NULL;?> ><?= $customer->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Product</label>
            <select name="productCode" >
                <?php foreach ($products as $key => $product): ?>
                    <option value="<?= $product->productCode; ?>" <?= $product->productCode==$order->productCode? 'selected': NULL;?> ><?= $product->productName; ?></option>
                <?php endforeach; ?>
            </select>
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