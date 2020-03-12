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
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new order</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Customer</label>
                    <select name="id_customer" >
                        <?php foreach ($customers as $key => $customer): ?>
                            <option value="<?= $customer->id_customer; ?>"><?= $customer->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Product</label>
                    <select name="productCode" >
                        <?php foreach ($products as $key => $product): ?>
                            <option value="<?= $product->productCode; ?>"><?= $product->productName; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="orderDate" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="quantity" required>
                </div>
                <input type="submit" value="Confirm" class="btn btn-primary"/>
                <a class="btn btn-secondary" href="order.php">Cancel</a>
            </form>       
        </div>   
    </div> 
</div> 