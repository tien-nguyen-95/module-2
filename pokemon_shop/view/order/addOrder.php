
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new order</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Customer</label>
                    <input type="text" class="form-control" name="id_customer" required>
                </div>
                <div class="form-group">
                    <label>Product</label>
                    <input type="text" class="form-control" name="productCode" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="orderDate" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" name="quantity" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a class="btn btn-secondary" href="order.php">Cancel</a>
            </form>       
        </div>   
    </div> 
</div> 