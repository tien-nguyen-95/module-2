
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new customer</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>       
        </div>   
    </div> 
</div> 