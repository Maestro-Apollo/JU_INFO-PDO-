

<?php
session_start();
$name = $_SESSION['name'];

include 'classes/event.class.php';
?>
<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign_reg.css">
</head>
<body>

   <?php include 'menu.php'; ?>

    <section>
       <div class="reg_part">



        <div class="reg_box text-center">

            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

                <h1>Buy Ticket</h1>
                <span class="text-light lead mb-5"><strong>Price $500</strong></span>
                <?php
                if(isset($Tobj)){ ?>

                  <div class="alert alert-success mt-4">
                    Paid Successfully! Due is
                    <strong><?php echo $Tobj; ?></strong>
                  </div>
                <?php } ?>

                <input type="text" name="username" placeholder="Username" class="username" value="<?php echo $name; ?>" autocomplete="off"><br><br>
                <!-- <input type="email" name="email" placeholder="Email" class="email" autocomplete="off"><br><br> -->
                <input type="password" name="password" placeholder="Password" class="password" autocomplete="off"><br><br>
                <input type="text" name="ticket" placeholder="Price" class="username" autocomplete="off"><br><br>

                <!-- <select name="gender" id="gender" class="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br> -->
                <input type="submit" value="Confirm" class="submit" name="Submit"><br><br>
                <!-- <span class="plain_txt mr-5">Already have an account?</span>
                <a href="sign.php" class="sign_up ml-5">Sign In</a> -->


            </form>

        </div>

       </div>
    </section>

    <?php include 'footer.php'; ?>






    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
