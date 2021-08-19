<?php require "../Model/VendorClass.php"; $object = new Vendors; foreach ($object->ItemDetail() as $product){} ?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- <script type="text/javascript" src="../jquery_file/jquery-3.5.1.js"></script> -->
</head>

<body>
    <div class="dash-header mynavbar px-md-5 d-flex justify-content-between">
        <div class="pl-3">
            <img src="../images/logo_img.png">
        </div>

        <div class="dash-list pr-md-5">
            <a href="#"> Help</a>
            <a href="user-profile.html"> Profile</a>
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
                        <a href="vendor-dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Add items</a>
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
                        <a href="user-profile.html">Profile</a>
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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="mycontainhide" id="storeItems">
                <div>
                    <h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Edit details of product</em></h4>
                </div>

                <div class="container recomm-img mt-4">

                    <div class="container">
                        <form method="POST" action="../Controller/ProcessController.php" enctype="multipart/form-data" id="uploadForm">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-7" style="border-right: 1px solid grey">
                                        <label for="inputEmail"><em>Product Description:</em></label>
                                        <div class="input-group mb-4">
                                            <input id="text" type="hidden" class="form-control" name="p_id" value="<?php echo $_GET["id"]; ?>" >
                                            <input id="text" type="text" class="form-control" name="p_name" value="<?php echo $product["name"]; ?>" placeholder="Enter product title">
                                        </div><?php echo $product["category"]; ?>

                                        <label for="inputEmail"><em>Product Description:</em></label>
                                        <div class="input-group mb-4">
                                            <textarea id="" class="form-control" name="p_description" value="<?php echo $product["description"]; ?>" >
                                                <?php echo $product["description"]; ?>
                                            </textarea>
                                        </div>
                                        <hr>

                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-6 col-6">
                                                <label for="inputEmail"><em>Product Price:</em></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="<?php echo $product["price"]; ?>" name="p_price" placeholder="Enter price for product">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-6">
                                                <label for="inputEmail"><em>Product Quantity:</em></label>
                                                <div class="input-group">
                                                    <input id="email" type="number" class="form-control" value="<?php echo $product["quantity"]; ?>" name="p_quantity" placeholder="Enter quantity of product">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-4">
                                            <div class="form-group" style="width: 100%">
                                                <select class="form-control" id="sel1" name="p_category">
    												<option value="<?php echo $product["category"]; ?>"><?php echo $product["category"]; ?></option>
    												<option>tools and equipments</option>
    												<option>Kiddies</option>
    												<option>women clothing</option>
    												<option>shoes</option>
  												</select>
                                            </div>
                                        </div>

                                        <!-- submit button  -->
                                        <div class="text-right">
                                            <input type="submit" value="Edit" name="p_edit" class="upload-btn mt-4">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="product-order-body-img">
                                                    <a href="items-details.php">
                                                        <img src="../images/product_img/portfolio-5.jpg" class="edit-img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="product-order-body-img">
                                                    <a href="items-details.html">
                                                        <img src="../images/product_img/portfolio-7.jpg" class="edit-img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="file-image m-4">
                                                <input type="file" name="file" class="text-secondary" id="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../../popper/docs/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../popper/docs/js/main.js"></script>
    <script src="../js/js-file.js"></script>


</body>

</html>