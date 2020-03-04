<?php
  require "../../login/access.php";
  require "/module2/pokemon_shop/controller/OrderController.php";
  require "/module2/pokemon_shop/model/OrderDB.php";
  require "/module2/pokemon_shop/model/Order.php";
  require "/module2/pokemon_shop/model/DBConnection.php";
  require "/module2/pokemon_shop/view/partials/head.php";
  use \Controller\OrderController;



  $controlOrder = new OrderController();

  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
  switch ($page) {
    case 'addOrder':
      $controlOrder->add();
      break;

    case 'deleteOrder':
      $controlOrder->delete();
      break;

    case 'editOrder':
      $controlOrder->edit();
      break;

    default:
      $controlOrder->index();
      break;
  }
  require "/module2/pokemon_shop/view/partials/foot.php";
?>