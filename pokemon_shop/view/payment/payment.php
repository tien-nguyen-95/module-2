<?php
    require_once "../../login/access.php";
    require_once "../../model/Image.php";
    require_once "../../controller/PaymentController.php";
    require_once "../../model/PaymentDB.php";
    require_once "../../model/Payment.php";
    require_once "../../model/DBConnection.php";
    require_once "../../view/partials/head.php";
    use \Controller\PaymentController;



    $controlPayment = new PaymentController();

    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    
    $controlPayment->index();
    
    require_once "../../view/partials/foot.php";
    ?>