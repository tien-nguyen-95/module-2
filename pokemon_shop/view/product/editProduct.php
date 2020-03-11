
<h2>Update</h2>
<form method="post" action="./product.php?page=editProduct" enctype="multipart/form-data">
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
            <label>Image</label>
            <input type="file" name="image" id="image"  onchange="readURL(this)">
            <img id="showimage" src="<?= $product->image ?>" width="60px" height="60px">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" value="<?php echo $product->price; ?>" required>
        </div>
        <div class="form-group">
            <label>Origin</label>
            <input type="text" class="form-control" name="origin" value="<?php echo $product->origin; ?>" required>
        </div>
    <div class="form-group">
        <input type="submit" value="Confirm" class="btn btn-primary"/>
        <a href="product.php" class="btn btn-default">Cancel</a>
    </div>
</form>