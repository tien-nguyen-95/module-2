<?php
namespace Controller;
use Model\Delivery;
use Model\DeliveryDB;
use Model\DBConnection;

class DeliveryController
{
    public $DeliveryDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->deliveryDB = new DeliveryDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include 'addDelivery.php';
        } else {

        $id_shiper = $_POST['id_shiper'];
        $orderNumber = $_POST['orderNumber'];
        $requiredDate = date('Y-m-d',strtotime($_POST['requiredDate']));
        $status = $_POST['status'];
    
        $delivery = new Delivery($id_shiper , $orderNumber , $requiredDate , $status);
        $this->deliveryDB->create($delivery);
        header('Location: delivery.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $delivery = $this->deliveryDB->get($id);
            include 'editDelivery.php';
        } else {
            $id = $_GET['id'];
            $id_shiper = $_POST['id_shiper'];
            $orderNumber = $_POST['orderNumber'];
            $requiredDate = date('Y-m-d',strtotime($_POST['requiredDate']));
            $status = $_POST['status'];
        
            $delivery = new Delivery($id_shiper , $orderNumber , $requiredDate , $status);
            $this->deliveryDB->update($id , $delivery);
            header('Location: delivery.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $delivery = $this->deliveryDB->get($id);
            include 'deleteDelivery.php';
        } else {
            $id = $_POST['id'];
            $this->deliveryDB->delete($id);
            header('Location: delivery.php');
        }
    }

    public function index(){
        $deliverys = $this->deliveryDB->getAll();
        include 'listDelivery.php';
    }
}
?>