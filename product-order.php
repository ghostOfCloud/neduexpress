<?php require "Model/ProductClass.php"; $object = new Products; foreach ($object->ProductOrder() as $product){} ?>

<!DOCTYPE html>
<html>

<head>
    <title>product view</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css-files/animate.css">
    <link href="design-files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css-files/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="product-header mynavbar">
        <div class="pl-3">
            <img src="images/logo_img.png">
        </div>
    </div>

    <!-- sellers details -->
    <div class="seller-search p-3">
        <div class="container seller-detail-nav">
            <div class="seller-detail-nav seller-main">
                <div>outdoor leisure store</div>
                <p id="visit"> visit store </p>
            </div>

            <div>
                <form action="#" method="post" class="w3layouts-newsletter">
                    <div class="input-group newsletter-input-area">
                        <input type="text" class="form-control" placeholder="Enter your email..." required="">
                        <div class="input-group-append">
                            <button class="seller-search-btn"><span class="fa fa-paper-plane-o" aria-hidden="true">search</span>
						</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <section class="container product-order-body">

        <div class="row">
            <div class="col-lg-5 col-sm-7">
                <div class="product-order-body-img product-order-cont">
                    <img src="images/product_img/d1.jpg" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-7 col-sm-5">
                <div class="pl-md-2 product-order-det mt-md-1">
                    <!-- <h4>Hot Sale Solid Color Casual Men's Slim Sportswear Sports Solid Color Men's Fitness Cotton Jogging Thin Sweat Casual Trousers</h4> -->
                    <h4><?php echo $product["description"]; ?></h4>

                    <hr>

                    <div class="item-price d-flex">
                        <p class="item-price-main">&#8358; <?php echo $product["price"]; ?></p>
                        <!-- <p class="pl-2"><i><del>&#8358; 10,000</del></i></p> -->
                    </div>

                    <div class="pt-md-4">
                        <div>Quantity:</div>
                        <div class="d-flex">
                            <p>pick 1 of <span>(<?php echo $product["quantity"]; ?>)</span> pieces available</p>
                        </div>
                    </div>

                    <div class="d-flex pt-5">
                        <div class="order-btn">
                            Order item
                        </div>

                        <div class="add-cart-btn ml-3">
                            Add to cart
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class=" container seller-recomm mb-5 px-5">
        <div class="text-center">
            <h2 class="mb-3"> Sellers recommendations</h2>
            <p class="justify px-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>

        <div class="container recomm-img">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="product-order-body-img">
                        <img src="images/product_img/portfolio-1.jpg" class="img-fluid">
                    </div>

                    <div class="product-order-body-img mt-3">
                        <img src="images/product_img/portfolio-8.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product-order-body-img">
                        <img src="images/product_img/portfolio-3.jpg" class="img-fluid">
                    </div>

                    <div class="product-order-body-img mt-3">
                        <img src="images/product_img/portfolio-5.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-order-body-img">
                        <img src="images/product_img/portfolio-9.jpg" class="img-fluid">
                    </div>

                    <div class="product-order-body-img mt-3">
                        <img src="images/product_img/portfolio-2.jpg" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>