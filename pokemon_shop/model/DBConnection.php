<?php
namespace Model;
use PDO;

class DBConnection
{
  public $dsn;
  public $user;
  public $password;

  public function __construct($dsn, $user, $password)
  {
      $this->dsn = $dsn;
      $this->password = $password;
      $this->user = $user;
  }

  public function connect(){
    $pdo =  new PDO($this->dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}