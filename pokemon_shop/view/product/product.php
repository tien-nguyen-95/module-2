<?php

  require "../../login/access.php";
  require_once "../../model/Image.php";
  require "../../controller/ProductController.php";
  require "../../model/ProductDB.php";
  require "../../model/Product.php";
  require "../../model/DBConnection.php";
  require "../../view/partials/head.php";
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
  require "../../view/partials/foot.php";
?>