<?php 
    session_start();
    if(isset($_REQUEST['userID'])){
        $_SESSION['userID'] = $_REQUEST['userID'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['name'] = $_REQUEST['name'];
        $_SESSION['picture'] = $_REQUEST['picture'];
        $_SESSION['accessToken'] = $_REQUEST['accessToken'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col- offset-1" aling="center">
                <img src="./img/logo.png" alt="" srcset=""><br><br><br>
                <form action="">
                    <input type="email" name="email" placeholder="Email" id="email-text" class="form-control">
                    <input type="password" name="password" id="pass-text" placeholder="Password" class="form-control">
                    <button type="submit">Log in</button>
                    <input type="button" name="btn-facebook" value="Login with Facebook" onclick="login()">
                </form>
            </div>

        </div>
    </div>
    <a href="index.php">Ir inicio</a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


    <script src="./js/loginFacebook.js"></script>
</body>

</html>