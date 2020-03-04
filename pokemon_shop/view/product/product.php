<?php

  require "../../login/access.php";
  require "/module2/pokemon_shop/controller/ProductController.php";
  require "/module2/pokemon_shop/model/ProductDB.php";
  require "/module2/pokemon_shop/model/Product.php";
  require "/module2/pokemon_shop/model/DBConnection.php";
  require "/module2/pokemon_shop/view/partials/head.php";
  use \Controller\ProductController;

  $controlProduct = new ProductController();

  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
  switch ($page) {
    case 'addProduct':
      $controlProduct->add();
      break;

    case 'deleteProduct':
      $controlProduct->delete();
      break;

    case 'editProduct':
      $controlProduct->edit();
      break;

    default:
      $controlProduct->index();
      break;
  }
  require "/module2/pokemon_shop/view/partials/foot.php";
?>