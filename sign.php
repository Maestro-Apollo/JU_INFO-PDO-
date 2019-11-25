<!DOCTYPE html>
<?php
include 'classes/sign.class.php';

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signstyle.css">
</head>
<body>

   <?php include 'menu.php';?>


    <section>
       <div class="sign_part">



        <div class="sign_box text-center">

            <form action="" method="post" autocomplete="off">

                <h1>Sign In</h1>
                <input type="text" name="username" placeholder="Username" class="username" autocomplete="off"><br><br>
                <input type="password" name="password" placeholder="Password" class="password" autocomplete="off"><br><br>
                <input type="submit" value="Submit" class="submit" name="submit"><br><br>



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
