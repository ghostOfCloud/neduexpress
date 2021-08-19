<?php 
    require "../Model/VendorClass.php"; 
    $object = new Vendors; 

    //For vendors profile
    foreach ($object->VendorProfile() as $user){} 
    
?>



<!doctype html>
<html lang="en">

<head>
    <title>Dashboard: vendor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css-files/vendor_style.css">
    <link href="../design-files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css-files/animate.css">
    <link rel="stylesheet" type="text/css" href="../css-files/index.css">
    <link rel="stylesheet" type="text/css" href="../css-files/dashboard.css">
    <!-- <script type="text/javascript" src="../jquery_file/jquery-3.5.1.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="dash-header mynavbar px-md-5 d-flex justify-content-between">
        <div class="pl-3">
            <img src="../images/logo_img.png">
        </div>

        <div class="dash-list pr-md-5">
            <a href="#"> Help</a>
            <a href="user-profile.php"> Profile</a>
        </div>
    </div>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
				          <i class="fa fa-bars"></i>
				          <span class="sr-only">Toggle Menu</span>
				        </button>
            </div>
            <div class="p-4 pt-5">
                <!-- <h1><a href="index.html" class="logo">Splash</a></h1> -->
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="vendor-dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="add-items.php">Add items</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Statistics</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="statistics.html">All Stats</a>
                            </li>
                            <li>
                                <a href="finished-products.html">Finished products</a>
                            </li>
                            <li>
                                <a href="high-demand.html">High demand</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="user-profile.php">Profile</a>
                    </li>
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                    <!-- <li>
	              <a href="#">Contact</a>
		          </li> -->
                </ul>


                <div class="footer" style="position:absolute;bottom:0;">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>

            </div>
        </nav>