<?php
namespace Controller;
use function Couchbase\defaultDecoder;
use Model\Product;
use Model\Image;
use Model\ProductDB;
use Model\DBConnection;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=casestudyDB", "root", "");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'addProduct.php';
        } else {
            
            
            $productName = $_POST['productName'];
            $width = $_POST['width'];
            $height = $_POST['height'];
            $material = $_POST['material'];
            $image = Image::uploadImg($_FILES['image']);
            $price = $_POST['price'];
            $origin = $_POST['origin'];
            $product = new Product($productName , $width , $height , $material , $image , $price , $origin);
            $this->productDB->create($product);
            header('Location: product.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'editProduct.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['productName'], $_POST['width'], $_POST['height'],$_POST['material'], Image::uploadImg($_FILES['image']), $_POST['price'] ,$_POST['origin']);
            $this->productDB->update($id, $product);
            header('Location: product.php');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'deleteProduct.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: product.php');
        }
    }

    public function index(){
        $products = $this->productDB->getAll();
        include 'listProduct.php';
      }
}
?>