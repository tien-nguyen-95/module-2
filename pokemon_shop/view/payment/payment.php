<?php
    require_once "../../login/access.php";
    require_once "/module2/pokemon_shop/model/Image.php";
    require_once "/module2/pokemon_shop/controller/PaymentController.php";
    require_once "/module2/pokemon_shop/model/PaymentDB.php";
    require_once "/module2/pokemon_shop/model/Payment.php";
    require_once "/module2/pokemon_shop/model/DBConnection.php";
    require_once "/module2/pokemon_shop/view/partials/head.php";
    use \Controller\PaymentController;



    $controlPayment = new PaymentController();

    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    
    $controlPayment->index();
    
    require_once "/module2/pokemon_shop/view/partials/foot.php";
    ?>