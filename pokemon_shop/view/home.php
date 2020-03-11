
<?php 
  require_once './partials/view_top.php';
  require_once '../model/view.php';
?>

<h1 style="text-align: center;">Sản Phẩm Mới</h1>
<?php $key =0; for($i = count($productss)-8; $i < count($productss); $i++) : ?>
  <?php if ($key+1 % 4 ==1) : ?>
  <div class="w3-row-padding w3-padding-16 w3-center" >
  <?php endif ; ?>
  
    <div class="w3-quarter">
      <img src="<?= $productss[$i]->image?>" alt="<?= $productss[$i]->productName?>" style="width:100%; height:250px">
      <h3><?= $productss[$i]->productName?></h3>
      <p>
         <?= $productss[$i]->price?> VND<br>
      </p>
    </div>
    <?php if ($key+1 % 4 ==0 || $i == count($productss)-1) : ?>
  </div>
<?php 
  endif; 
  $key++;  
  endfor; 
  require_once './partials/view_bot.php';
?>