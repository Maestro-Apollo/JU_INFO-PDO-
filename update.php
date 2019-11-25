


<!DOCTYPE html>
<?php include 'classes/updatePage.php';
 include 'classes/update.class.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   <?php include 'menu.php' ?>

    <section class="update_part text-center">
        <div class="container update_layout p-5">

            <form action="" method="post">
              <?php
              if(isset($getUp)){
                echo $getUp;
              }

               ?>
              <input type="text" name="old_username" class="old_username" placeholder="Previous Username" value="<?php echo $updateObj['username']; ?>" required><br><br>

               <input type="text" name="update_username" class="update_username" placeholder="New Username"><br><br>
               <input type="text" name="update_password" class="update_password" placeholder="New Password" value=""><br><br>
               <input type="text" name="update_email" class="update_email" placeholder="New Email" value="<?php echo $updateObj['email']; ?>"><br><br>

               <input type="submit" name="Submit" value="submit" class="submit"><br><br>
               <input type="submit" name="Submit2" value="Delete" class="delete">

            </form>

        </div>
    </section>

    <?php include 'footer.php' ?>

</body>
</html>
