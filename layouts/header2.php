<!DOCTYPE html>
<html lang="en">

<head>

    <title>Group chat</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
        text-shadow: 1px 3px 0 #969696, 1px 13px 5px #aba8a8, 2px 2px 2px rgba(206, 29, 28, 0);
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="col-md-8 col-md-4 navbar-header">

                <a class="navbar-brand " href="home.php"> GroupChat</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>