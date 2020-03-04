<?php
  require "../../login/access.php";
  require "/module2/pokemon_shop/controller/ShiperController.php";
  require "/module2/pokemon_shop/model/ShiperDB.php";
  require "/module2/pokemon_shop/model/Shiper.php";
  require "/module2/pokemon_shop/model/DBConnection.php";
  require "/module2/pokemon_shop/view/partials/head.php";
  use \Controller\ShiperController;
  
  $controlShiper = new ShiperController();
  
  $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
  switch ($page){
    case 'addShiper':
      $controlShiper->add();
      break;
    case 'deleteShiper':
      $controlShiper->delete();
      break;
    case 'editShiper':
      $controlShiper->edit();
        break;
    default:
      $controlShiper->index();
      break;
  }
  require "/module2/pokemon_shop/view/partials/foot.php";
?>