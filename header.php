<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <!-- Favicon -->
    <link href="img/fav.png" rel="shortcut icon" type="image/x-icon"/>

    <!-- Title -->
    <title>Online Quiz</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom icon Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Main CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/green.css" rel="stylesheet" id="style_theme">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="loader"></div>
    </div>
    <!-- Scroll to Top -->
    <a id="scroll-up" ><i class="fa fa-angle-up"></i></a>

    <div class="konnect-info">
        <div class="container-fluid">
            <div class="row">
                <!-- Top bar Left -->
                <div class="col-md-6 col-sm-8 hidden-xs">
                    <ul>
                        <li><i class="fa fa-paper-plane" aria-hidden="true"></i> simranjitsingh@gmail.com </li>
                        <li class="li-last"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i> +1 647 502 8050</li>
                    </ul>
                </div>
                <!-- Top bar Right -->
                <div class="col-md-6 col-sm-4">
                    <ul class="konnect-float-right">
                        <li><a href="login.php"><i class="fa fa-user-o" aria-hidden="true"></i>Admin Login </a></li>
                        <li class="li-last hidden-xs hidden-sm">
                            <a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" href="#"> <i class="fa fa-instagram"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Responsive Menu -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <img src="img/icons/menu.png" alt="menu" width="40"> </button>
                <!-- Logo -->
                <a class="navbar-brand" href="index.php"><img class="logo-change" src="img/logo.png" alt="logo"></a> </div>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Questionnarie <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="english.php">General English</a></li>
                            <li><a href="aptitude.php">General Aptitude</a></li>
                            <li><a href="reasoning.php">General Reasoning</a></li>
                            <li><a href="computer.php">Computer Science</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>