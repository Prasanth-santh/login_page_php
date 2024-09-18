<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="overall">
        <div class="welcome">
            <?php
            session_start();
            $username= $_SESSION["uname"];
            $email=$_SESSION['email'];
            $mobile=$_SESSION['mobile'];
            ?>
            <h1> WELCOME TO DASH BOARD </h1>
            <h2> NAME : <?php echo $username?></h2>
            <h2> EMAIL : <?php echo $email?></h2>
            <h2> MOBILE NO : <?php echo $mobile?></h2>

            <a href="./index.php"> Logout</a>
        </div>
    </div>
</body>
</html>