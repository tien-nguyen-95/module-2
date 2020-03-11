<?php
namespace Controller;
use function Couchbase\defaultDecoder;
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
            
            
            $orderName = $_POST['DeliveryName'];
            $width = $_POST['width'];
            $height = $_POST['height'];
            $material = $_POST['material'];
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $price = $_POST['price'];
            $Delivery = new Delivery($DeliveryName,$width,$height,$material,$image,$price);
            $this->DeliveryDB->create($Delivery);
            header('Location: Delivery.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $Delivery = $this->DeliveryDB->get($id);
            include 'editDelivery.php';
        } else {
            $id = $_POST['id'];
            $Delivery = new Delivery($_POST['DeliveryName'], $_POST['width'], $_POST['height'],$_POST['material'], addslashes(file_get_contents($_FILES['image']['tmp_name'])), $_POST['price']);
            $this->DeliveryDB->update($id, $Delivery);
            header('Location: Delivery.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $Delivery = $this->DeliveryDB->get($id);
            include 'deleteDelivery.php';
        } else {
            $id = $_POST['id'];
            $this->DeliveryDB->delete($id);
            header('Location: Delivery.php');
        }
    }

    public function index(){
        $Deliverys = $this->DeliveryDB->getAll();
        include 'listDelivery.php';
      }
}
?>