<?php

/**
 *
 */
class Update extends Database
{

  public function updateFunction()
  {
    if(isset($_POST['Submit'])){
      $olduser = $_POST['old_username'];
      $newuser = $_POST['update_username'];
      $newpass = md5($_POST['update_password']);
      $newemail = $_POST['update_email'];
      $upsql = "Update user_tbl set username = '$newuser', password = '$newpass', email = '$newemail' where username = '$olduser'";
      if(mysqli_query($this->link,$upsql)){
        $msg = "<div class='alert alert-success ml-5 mr-5'><strong>Data Updated!</strong></div>";
        return $msg;
      }else{
        echo "Not Updated";
      }
    }

  }
}
$uObj = new Update;
$getUp = $uObj->updateFunction();


 ?>
