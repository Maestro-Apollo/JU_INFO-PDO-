<?php

include 'Database.php';
/**
 *
 */
class UpdatePage extends Database
{

  public function showValue()
  {
      $name = $_GET['name'];
      $sql = "select username,password,email from user_tbl where username like '$name'";
      $res = mysqli_query($this->link,$sql);
      $result = mysqli_fetch_assoc($res);
      return $result;

  }
}
$upObj = new UpdatePage;
$updateObj = $upObj->showValue();


 ?>
