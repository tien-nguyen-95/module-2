<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add Delivery</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Shiper</label>
                    <input type="text" class="form-control" name="id_shiper" required>
                </div>
                <div class="form-group">
                    <label>Order</label>
                    <input type="text" class="form-control" name="orderNumber" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" name="requiredDate" required>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" required>
                </div>
                <input type="submit" value="Confirm" class="btn btn-primary"/>
                <a class="btn btn-secondary" href="order.php">Cancel</a>
            </form>       
        </div>   
    </div> 
</div> 