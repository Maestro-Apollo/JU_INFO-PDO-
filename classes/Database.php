<?php

/**
 *
 */
class Database
{
  private $hostname = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "juinfo2";

  protected $link;

  public function __construct()
  {
    $this->link = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
    if($this->link){
      // echo "Connected";
    }else{
        die("Connecting failed!");
    }
  }

}




 ?>
