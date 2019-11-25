<?php

include 'Database.php';

class Insert extends Database
{

  public function insertFunction()
  {

    if(isset($_POST['Submit'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $gender = $_POST['gender'];
      if($username == "" || $email == "" || $password == "" || $gender == ""){
        $msg = "<div class='alert alert-warning lead'><strong>Fields can't be empty!</strong></div>";
        return $msg;
      }else{
        $find = "Select * from user_tbl where username like '$username'";
        $getUser = mysqli_query($this->link, $find);
        if(mysqli_fetch_assoc($getUser)){
          $msg = "<div class='alert alert-danger lead'><strong>Username Already Taken!</strong></div>";
          return $msg;
        }else{
          $insertQuery = "Insert into user_tbl(username,email,password,gender) values('$username','$email','$password','$gender')";
          if(mysqli_query($this->link,$insertQuery)){
            $msg = "<div class='alert alert-success lead'><strong>Data Added Successfully!</strong></div>";
            return $msg;
          }else{
            die($this->link->error.__LINE__);
          }
        }
      }
    }


  }

}

$inserObj = new Insert;
$obj = $inserObj ->insertFunction();


 ?>
