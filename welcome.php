<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/welcome.css">

    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Kaushan+Script|Pacifico|Raleway:700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>


    <div class="welcome_img text-center">

        <h1>Welcome <span><?php echo $_SESSION['getName']; ?>!</span> </h1>
        <a href="show2.php">View Event</a>
    </div>

</body>

</html>
