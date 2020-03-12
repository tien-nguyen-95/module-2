<?php
  require "../../login/access.php";
  require "../../controller/DeliveryController.php";
  require "../../model/DeliveryDB.php";
  require "../../model/Delivery.php";
  require "../../model/DBConnection.php";
  require "../../view/partials/head.php";
  use \Controller\DeliveryController;
  
  $controlDelivery = new DeliveryController();

  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
  switch ($page) {
    case 'addDelivery':
      $controlDelivery->add();
      break;

    case 'deleteDelivery':
      $controlDelivery->delete();
      break;

    case 'editDelivery':
      $controlDelivery->edit();
      break;  

    default:
      $controlDelivery->index();
      break;
  }
  require "../../view/partials/foot.php";
?>