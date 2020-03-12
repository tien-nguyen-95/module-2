<?php
  require "../../login/access.php";
  require "../../controller/OrderController.php";
  require "../../model/OrderDB.php";
  require "../../model/Order.php";
  require "../../model/DBConnection.php";
  require "../../view/partials/head.php";
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
  require "../../view/partials/foot.php";
?>