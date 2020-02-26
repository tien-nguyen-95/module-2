<?php
// Initialize the session
// session_start();

// // Check if the user is logged in, if not then redirect him to login page
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: view/login/login.php");
//     exit;
// }
?>

<?php
        $connect = include_once 'core/bootstrap.php';
    if(!isset($_POST['order']) && !isset($_POST['createProduct']) &&!isset($_POST['login'])  && !isset($_POST['shiper']) && !isset($_POST['product']) || isset($_POST['logout'])){
        
        $results = $connect->selectAll('products','Product');
        include_once 'view/index.view.php' ;
    }

    if(isset($_POST['order'])){
        
        $results = $connect->selectAll('orders','Order');
        include_once 'view/manager/order.manager.php' ;
    }

    if(isset($_POST['product'])){
        
        $results = $connect->selectAll('products','Product');
        include_once 'view/manager/product.manager.php' ;
    }
    if(isset($_POST['shiper'])){
        
        $results = $connect->selectAll('shipers','Shiper');
        include_once 'view/manager/shiper.manager.php' ;
    }
    if(isset($_POST['createProduct'])){
        
        include_once 'view/form/form.php';
        
       
    }
    if(isset($_POST['login'])){
        header("location: view/login/login.php");
    
        // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: view/login/login.php");
        exit;
    }
    $results = $connect->selectAll('products','Product');
    include_once 'view/manager/product.manager.php' ;
    }
?>