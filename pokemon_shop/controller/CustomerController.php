<?php
namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'addCustomer.php';
        } else {
  
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
  
            $customer = new Customer($name,$phone,$email,$address);
            $this->customerDB->create($customer);
            $message = 'Successful';
            include 'addCustomer.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'editCustomer.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['phone'], $_POST['email'],$_POST['address']);
            $this->customerDB->update($id, $customer);
            header('Location: customer.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'deleteCustomer.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: customer.php');
        }
    }

    public function index(){
        $customers = $this->customerDB->getAll();
        include 'listCustomer.php';
      }
}
?>