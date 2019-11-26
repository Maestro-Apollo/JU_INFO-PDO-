<?php

include 'Database.php';
class Ticket extends Database
{

  public function ticketFunction()
  {

    if(isset($_POST['Submit'])){
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $price = $_POST['ticket'];
      if($username == "" OR $password == "" OR $price == ""){
        echo "Fields can't be empty!";
      }else{
        $sql = "Update user_tbl SET paid = $price, rest = (500 - $price) where username like '$username'";
        if(mysqli_query($this->link,$sql)){
          $result = "select rest from user_tbl where username like '$username'";
          $aSql = mysqli_query($this->link,$result);
          $bSql = mysqli_fetch_assoc($aSql);
          $msg = $bSql['rest'];
          return $msg;
        }else{
          echo "Not added";
        }
      }
    }

  }
}

$TckObj = new Ticket;
$Tobj = $TckObj->ticketFunction();


 ?>
