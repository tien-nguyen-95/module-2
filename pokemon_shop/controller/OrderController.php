<?php
namespace Controller;

use Model\Order;
use Model\OrderDB;
use Model\DBConnection;

class OrderController
{
    public $orderDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->orderDB = new OrderDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include 'addOrder.php';
        } else {

        $id_customer = $_POST['id_customer'];
        $productCode = $_POST['productCode'];
        $orderDate = date('Y-m-d',strtotime($_POST['orderDate']));
        $quantity = $_POST['quantity'];
    
        $order = new Order($id_customer,$productCode,$orderDate,$quantity);
        $this->orderDB->create($order);
        header('Location: order.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $order = $this->orderDB->get($id);
            include 'editOrder.php';
        } else {
            $id = $_POST['id'];
            $id_customer = $_POST['id_customer'];
            $productCode = $_POST['productCode'];
            $orderDate = date('Y-m-d',strtotime($_POST['orderDate']));
            $quantity = $_POST['quantity'];
        
            $order = new Order($id_customer,$productCode,$orderDate,$quantity);
            $this->orderDB->update($id, $order);
            header('Location: order.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $order = $this->orderDB->get($id);
            include 'deleteOrder.php';
        } else {
            $id = $_POST['id'];
            $this->orderDB->delete($id);
            header('Location: order.php');
        }
    }

    public function index(){
        $orders = $this->orderDB->getAll();
        include 'listOrder.php';
      }
}
?>