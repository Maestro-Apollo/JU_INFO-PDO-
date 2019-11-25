<?php
session_start();
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
      if($user == "" || $pass == ""){
        $msg = "<div class='alert alert-warning'><strong>Fields can't be empty!</strong></div>";
        return $msg;
      }else{
        $sql = "Select username,password from user_tbl where username like '$user' AND password like '$pass'";
        $_SESSION['name'] = $user;

        $res = mysqli_query($this->link,$sql);
        if(mysqli_fetch_assoc($res)){
          header("location:event.php");
        }else{
          $msg = "<div class='alert alert-danger'><strong>Not Register!</strong></div>";
          return $msg;
        }
      }
    }
  }

}

$signObj = new signInClass;
$Sobj = $signObj->signCheck();


 ?>
