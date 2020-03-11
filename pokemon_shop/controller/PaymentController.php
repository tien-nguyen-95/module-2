<?php
namespace Controller;

use Model\Payment;
use Model\PaymentDB;
use Model\DBConnection;

class PaymentController
{
    public $paymentDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->paymentDB = new PaymentDB($connection->connect());
    }

    public function index(){
        $payments = $this->paymentDB->getAll();
        include 'listPayment.php';
      }
}
?>