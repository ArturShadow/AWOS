<?php

    session_start();
    echo "Hola";
    if(!isset($_SESSION['userID']) || !isset($_SESSION['email']))
    {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scalable=1.0 maximum-scale=1.0, maximum">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title> Página Principal </title>
</head>

<body>
     <div class="container" style="margin-top:100px">
        <div class = "row justify-content-center">

            <div class="col-md-3" align="center">

                <img src="img/logo.png"> <br> <br> <br> 
                
                <img src="<?php 
                            echo $_SESSION['picture'];
                         ?>">
                 <br> <br> <br>        
            </div> 
            <div class="col-md-9">
                User ID: <?php
                            echo $_SESSION['userID'];
                        ?>
                        <br>
                Nombre: <?php
                            echo $_SESSION['name'];
                        ?>
                         <br>
                Email: <?php
                            echo $_SESSION['email'];
                        ?>
                         <br>
        
            </div>       
        </div> 
     </div>
     
      
</body>
</html>

