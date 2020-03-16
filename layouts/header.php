<!DOCTYPE html>
<html lang="en">

<head>

    <title>Group chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body {
        background: #006699 url('images/img23.jpg') no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
        width: 100vw;
        height: 100vh;

    }

    .navbar-inverse {
        background-color: #FF4500;
        border-color: #FF4500;
    }

    .navbar-inverse .navbar-brand {
        color: white;
    }


    a:hover {
        color: #50546d;
    }

    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }

    .navbar-brand {
        position: absolute;
        top: 1px;
        left: 16px;
        font-size: 22px;
        text-shadow: 1px 3px 0 #969696, 1px 13px 5px #aba8a8, 2px 2px 2px rgba(206,29,28,0);
    }

    .containers {
        position: relative;
    }

    .containers h2 {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        font-size: 70px;
        text-shadow: 2px 3px 0 #969696, 2px 13px 5px #aba8a8;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">

        <div class="container-fluid">
            <div class="col-md-4 col-md-6 navbar-header">
                <a class="navbar-brand" href="home.php"> GroupChat</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign-Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>

    </nav>