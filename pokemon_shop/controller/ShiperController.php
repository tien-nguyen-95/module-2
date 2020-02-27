<?php
namespace Controller;

use Model\Shiper;
use Model\ShiperDB;
use Model\DBConnection;

class ShiperController
{
    public $shiperDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->shiperDB = new ShiperDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'addShiper.php';
        } else {
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $timework = $_POST['timework'];
  
            $shiper = new Shiper($name,$birthday,$phone,$email,$timework);
            $this->shiperDB->create($shiper);
            $message = 'Successful';
            include 'addShiper.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $shiper = $this->shiperDB->get($id);
            include 'editShiper.php';
        } else {
            $id = $_POST['id'];
            $shiper = new Shiper($_POST['id_shiper'], $_POST['name'], $_POST['birthday'],$_POST['phone'], $_POST['email'], $_POST['timework']);
            $this->shiperDB->update($id, $shiper);
            header('Location: shiper.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $shiper = $this->shiperDB->get($id);
            include 'deleteShiper.php';
        } else {
            $id = $_POST['id'];
            $this->shiperDB->delete($id);
            header('Location: shiper.php');
        }
    }

    public function index(){
        $shipers = $this->shiperDB->getAll();
        include 'listShiper.php';
      }
}
?>