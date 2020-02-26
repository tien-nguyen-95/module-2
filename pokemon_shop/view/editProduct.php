<h2>Update</h2>
<form method="post" action="./index.php?page=editProduct">
    <input type="hidden" name="id" value="<?php echo $product->productCode; ?>"/>
    <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="productName" value="<?php echo $product->productName; ?>"required>
        </div>
        <div class="form-group">
            <label>Width</label>
            <input type="text" class="form-control" name="width" value="<?php echo $product->width; ?>"required>
        </div>
        <div class="form-group">
            <label>Height</label>
            <input type="text" class="form-control" name="height" value="<?php echo $product->height; ?>" required>
        </div>
        <div class="form-group">
            <label>Material</label>
            <input type="text" class="form-control" name="material" value="<?php echo $product->material; ?>" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $product->description; ?>" >
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" value="<?php echo $product->price; ?>" required>
        </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>