<?php

    session_start();
        // echo "Hola";
        // if(!isset($_SESSION['userID']) || !isset($_SESSION['email']))
        // {
        //     header('Location: login.php');
        //     exit();
        // }
?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scalable=1.0 maximum-scale=1.0, maximum">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <title> Página Principal </title>
</head>

<body>
    <div>
        <img src="./img/logo.png" alt="">
    </div>
    <div>
        <img src="<?php echo $_SESSION['picture'];?>">
        <p>Name:<?php echo $_SESSION['name'];?></p>
        <p>Email: <?php echo $_SESSION['email'];?></p>
        <p>Access Token: <?php echo $_SESSION['accessToken'];?></p>
        <a href="login.php">Login</a>
    </div>
</body>

</html>