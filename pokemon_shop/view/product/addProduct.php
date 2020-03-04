
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new product</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="productName" required>
                </div>
                <div class="form-group">
                    <label>Width</label>
                    <input type="text" class="form-control" name="width" required>
                </div>
                <div class="form-group">
                    <label>Height</label>
                    <input type="text" class="form-control" name="height" required>
                </div>
                <div class="form-group">
                    <label>Material</label>
                    <input type="text" class="form-control" name="material" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>       
        </div>   
    </div> 
</div> 