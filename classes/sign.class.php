<?php

include 'Database.php';

/**
 *
 */
class signInClass extends Database
{

  public function signCheck()
  {
    if(isset($_POST['submit'])){
      $user = $_POST['username'];
      $pass = md5($_POST['password']);
      $sql = "Select username,password from user_tbl where username like '$user' AND password like '$pass'";
      $res = mysqli_query($this->link,$sql);
      if(mysqli_fetch_assoc($res)){
        header("location:event.php");
      }else{
        echo "Not reg!";
      }
    }
  }

}

$signObj = new signInClass;
$signObj->signCheck();


 ?>
