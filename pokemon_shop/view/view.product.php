<?php 
  require_once './partials/view_top.php';
  require_once '../model/view.php';
?>

  <?php  foreach($productss as $key=>$product) : ?>
    <?php if ($key+1 % 4 ==1) : ?>
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php endif ; ?>
    
      <div class="w3-quarter">
        <img src="<?= $product->image?>" alt="<?= $product->productName?>" style="width:100%; height:250px">
        <h3><?= $product->productName?></h3>
        <p>
          Chiều Cao: <?= $product->height?>cm<br>
          Chiều Ngang: <?= $product->width?>cm<br>
          Chất Liệu: <?= $product->material?><br> 
          Giá: <?= $product->price?> VND<br>
          Xuất Sứ: <?= $product->origin?><br></p>
      </div>
    <?php if ($key+1 % 4 ==0 || $key == count($productss)-1) : ?>
  </div>
  <?php 
    endif;  
    endforeach; 
    require_once './partials/view_bot.php';
  ?>