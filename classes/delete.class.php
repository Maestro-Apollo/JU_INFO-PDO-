<?php

class Delete extends Database
{

  public function deleteFunction()
  {
    if(isset($_POST['Submit2'])){
      $name = $_POST['old_username'];
      $email = $_POST['update_email'];
      if($name == "" OR $email == ""){
        $msg = "<div class='alert alert-warning'><strong>Provite username and email</strong></div>";
        return $msg;
      }else{
        $sql = "Delete from user_tbl where username = '$name' AND email = '$email'";
        if(mysqli_query($this->link,$sql)){
          $msg = "<div class='alert alert-success'><strong>Account Deleted</strong></div>";
          return $msg;
        }else{
          $msg = "<div class='alert alert-danger'><strong>Something is wrong</strong></div>";
          return $msg;
        }
      }
    }

  }
}
$delObj = new Delete;
$dObj = $delObj->deleteFunction();



 ?>
