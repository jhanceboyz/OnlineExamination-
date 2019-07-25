<?php session_start(); ?>

<?php

if(!isset($_SESSION['user']))
{
    header('Location: ../login.php');
}else
{
    echo '<script> DisplaySuccess("Welcome Admin"); </script>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site Metadata -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Project Manager" />
    <meta name="author" content="Harampreet Kaur" />

    <!--FavIcon-->
    <link rel="icon" href="assets1/images/MS Project-48.ico" />

    <!-- TITLE -->
    <title>Admin - Online Quiz</title>

    <!--CSS-->
    <link href="../assets1/content/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets1/content/bootstrap-material-design.min.css" rel="stylesheet" />
    <link href="../assets1/content/ripples.min.css" rel="stylesheet" />
    <link href="../assets1/content/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets1/content/c3.min.css" rel="stylesheet" />
    <link href="../assets1/content/style.css" rel="stylesheet" />
    <link href="../assets1/content/custom.css" rel="stylesheet" />

    <!--SCRIPTS-->
    <script src="../assets1/scripts/jquery-2.2.3.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/additional-methods.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/material.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/notify.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/jquery.metisMenu.js" type="text/javascript"></script>
    <script src="../assets1/scripts/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/jquery.sparkline.min.js.gz" type="text/javascript"></script>
    <script src="../assets1/scripts/d3.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/c3.min.js" type="text/javascript"></script>
    <script src="../assets1/scripts/pie-chart.js" type="text/javascript"></script>
    <script src="../assets1/scripts/custom.js" type="text/javascript"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<!-- Top Level Menu -->
<div id="wrapper">

    <!--Top Menu Bar-->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1>
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </h1>
        </div>

        <!--Notifications-->
        <div class="drop-men">
            <ul class="">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
                            <span class="name-caret">
                                Admin
                                <i class="caret"></i>
                            </span>
                    </a>
                    <ul class="dropdown-menu" role="menu" style="padding-right:120px;">
                        <li>
                            <a href="changepassword.php">
                                <i class="fa fa-lock"></i>
                                Change Password
                            </a>
                        </li>
                        <li>
                            <a href="../logout.php">
                                <i class="fa fa-sign-out "></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <div class="clearfix"></div>

        <!--SideBar-->
        <div class="navbar-default sidebar" role="navigation" style="overflow: auto">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="index.php" class="hvr-bounce-to-right">
                            <i class="fa fa-dashboard nav_icon"></i>
                            <span class="nav-label active">Dashboards</span>
                        </a>
                    </li>

                    <!--About-->
                    <li>
                        <a href="#" class="hvr-bounce-to-right">
                            <i class="fa fa-tasks nav_icon"></i>
                            <span class="nav-label">Questions Master</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addquestion.php" class="hvr-bounce-to-right">
                                    <i class="fa fa-table nav_icon"></i>
                                    Add Questions
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hvr-bounce-to-right">
                                    <i class="fa fa-table nav_icon"></i>
                                    View Questions
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--Settings-->
                    <li>
                        <a href="#" class="hvr-bounce-to-right">
                            <i class="fa fa-cog nav_icon"></i>
                            <span class="nav-label">Settings</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="changepassword.php" class="hvr-bounce-to-right">
                                    <i class="fa fa-unlock  nav_icon"></i>
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php" class="hvr-bounce-to-right">
                                    <i class="fa fa-unlock  nav_icon"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Main Content-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">


