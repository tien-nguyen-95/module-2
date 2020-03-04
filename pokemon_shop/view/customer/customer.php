<?php
  require "../../login/access.php";
  require "/module2/pokemon_shop/controller/CustomerController.php";
  require "/module2/pokemon_shop/model/CustomerDB.php";
  require "/module2/pokemon_shop/model/Customer.php";
  require "/module2/pokemon_shop/model/DBConnection.php";
  require "/module2/pokemon_shop/view/partials/head.php";
  use \Controller\CustomerController;



  $controlCustomer = new CustomerController();

  $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
  switch ($page) {
    case 'addCustomer':
      $controlCustomer->add();
      break;

    case 'deleteCustomer':
      $controlCustomer->delete();
      break;

    case 'editCustomer':
      $controlCustomer->edit();
      break;

    default:
      $controlCustomer->index();
      break;
  }
  require "/module2/pokemon_shop/view/partials/foot.php";
?>