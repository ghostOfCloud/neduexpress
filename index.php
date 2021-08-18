<?php require "Model/ProductClass.php"; $object = new Products; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Nedu shopping Mall</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css-files/index.css">
    <link rel="stylesheet" type="text/css" href="css-files/animate.css">
    <link href="design-files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <!-- NAVBAR -->
    <div class="hero ">
        <nav class="navbar navbar-expand-md d-flex justify-content-between align-items-center px-5 mynavbar">
            <div>
                <a href="index.html">
                    <img src="images/logo_img.PNG" width="80px">
                </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		        <span class="navbar-toggler-icon" style="background-color: #F58634"></span>
		    </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">Messages</a>
                    <a href="login.html" data-toggle="modal" class="nav-item nav-link">Login</a>
                    <a href="#" class="nav-item nav-link"><i>Register</i></a>
                </div>
            </div>

        </nav>
        <div class="container d-flex justify-content-around myheronav">
            <div class="herotext" style="width:60%;">
                <h1>Shopping has never been more fun!</h1>
                <hr>
                <p><i>Join over a million shoppers and get items delivered at your door step.</i> </p>
                <div class="mt-4">
                    <div class="register-button">Register</div>
                </div>
            </div>

            <div class="mt-5" style="width:70%; position: relative;">
                <div class="tiny_dots dot_1 animated bounce infinite"></div>
                <div class="tiny_dots dot_2 animated slideInRight infinite"></div>
                <div class="tiny_dots dot_3 animated fadeIn infinite"></div>
                <div class="mid_dots dot_4 animated fadeInOut infinite"></div>
                <!-- <div class="big_dots dot_5"></div> -->
                <img src="images/check1.png" width="90%" id="imgchange" class="animated zoomIn">
            </div>

        </div>
    </div>

    <!-- ======================= MODAL STARTS HERE ================================== -->
    <div class="modal fade" tabindex="-1" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title login-title">Login </h5>
                    <button type="button" class="close close-sign" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form login-form">
                        <div class="form-group mt-4">
                            <!-- <label for="inputEmail">Email</label> -->
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                        </div>

                        <div class="form-group mt-4">
                            <!-- <label for="inputEmail">Password</label> -->
                            <input type="password" class="form-control" id="inputEmail" placeholder="Enter your password">
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <p class="text-secondary"><small>Forgot password?</small></p>
                        <p class="text-secondary"><small>Don't have an account?</small></p>
                    </div>
                </div>
                <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

                <div class="text-center mb-3">
                    <a href="login.html" class="btn login-btn">Login </a>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!--  WEBSITES BODY STARTS HERE -->
    <div class="categories">
        <div class="px-md-5 px-sm-3 pt-3 d-flex justify-content-center">
            <div class="categories-list p-3">
                <p>kiddies</p>
                <p>telecommunications gadgets</p>
                <p>groceries</p>
                <p>toys</p>
                <p>Women's clothings</p>
                <p>Men's clothings</p>
                <p>Jewelries</p>
                <p>Laptops</p>
                <p>Health & fitness</p>
            </div>

            <div class=" container carousel-display">
                <div class="container" style="width: 100%">

                    <!-- carousel starts here -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/product_img/portfolio-9.jpg" class="img-fluid" style="width:100%; height: 270px; border-radius:5px">
                            </div>
                            <div class="carousel-item">
                                <img src="images/product_img/portfolio-5.jpg" class="img-fluid" style="width:100%; height: 270px; border-radius:5px">
                            </div>
                            <div class="carousel-item">
                                <img src="images/product_img/portfolio-3.jpg" class="img-fluid" style="width:100%; height: 270px; border-radius:5px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <?php 
                            foreach ($object->HomePageProducts() as $home_product){
                                echo $home_product;
                            } 
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================== POPULAR PRODUCTS SECTION  CHECK =========================== -->
    <section id="portfolio" class=" portfolio">
        <div class="text-center mb-5 portfolio-header">
            <h4>Popular Products</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
        <div class="container">


            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="images/product_img/portfolio-1.jpg" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="images/product_img/portfolio-2.jpg" class="img-fluid" alt="">
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item">
                    <div class="portfolio-img">
                        <img src="images/product_img/portfolio-3.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->



    <footer style="margin-top: 50px">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 social-contact">
                    <h2 class="mb-lg-4 mb-3">NeduExpress</h2>
                    <p><i> Contact us on social media...</i></p>
                </div>

                <div class="col-md-8 news-details">
                    <div class="newsletter">
                        <h2 class=" mb-lg-4 mb-3">Newsletter</h2>
                        <p> Subscribe to our newsletter to get the lattest updates on your favourite products.</p>

                        <!-- NEWSLETTER INPUT  -->
                        <form action="#" method="post" class="w3layouts-newsletter">
                            <div class="input-group newsletter-input-area">
                                <input type="text" class="form-control" placeholder="Enter your email..." required="">
                                <div class="input-group-append">
                                    <!-- <span class="input-group-text">.00</span> -->
                                    <button class="newsletter-btn"><span class="fa fa-paper-plane-o" aria-hidden="true">click me</span></button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                            <h5 class=" mb-lg-4 mb-3">INFORMATION</h5>
                            <div>
                                <p class="text-secondary">HOME</p>
                                <p class="text-secondary">ABOUT US</p>
                                <p class="text-secondary">GALLERY</p>
                                <p class="text-secondary">SEVICES</p>
                                <p class="text-secondary">CONTACT US</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h5 class="mb-lg-4 mb-3">CUSTOMER SERVICE</h5>
                            <div>
                                <p class="text-secondary">DELIVERY & RETURN</p>
                                <p class="text-secondary">WARRANTY</p>
                                <p class="text-secondary">TERMS AND CONDITION</p>
                                <p class="text-secondary">PRIVACY POLICY</p>
                                <!-- <p></p> -->
                            </div>
                        </div>

                        <div class="col-md-4 my-md-0 my-5">
                            <h5 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h5>
                            <div class="contact-info">
                                <div>
                                    <h5 class="ad-info mb-1">Phone</h5>
                                    <p class="text-secondary"> 07045634234</p>
                                </div>
                                <div class=" my-3">
                                    <h5 class="ad-info mb-2">Email </h5>
                                    <p><a href="mailto:info@example.com" class="text-secondary">info@example.com</a></p>
                                </div>
                                <div class="">
                                    <h5 class="ad-info mb-1">HQ Location</h5>
                                    <p class="text-secondary">GRA, Enugu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-2" style="background-color: #F58634">
            Copyright reserved
        </div>
    </footer>



    <!-- JAVSCRIPT CONTROLS -->
    <script type="text/javascript" src="../popper/docs/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../popper/docs/js/main.js"></script>


    <!-- <script type="text/javascript">
		
		let image = document.getElementById('imgchange');
		let images = ['images/check1.png','images/header_images/image_1.jpeg', 'images/header_images/images_2.jpeg'];

		setInterval(function(){
			let randomSelection = Math.floor(Math.random() * 3);
			image.classList.add("animated","fadeIn");
			image.src = images[randomSelection];
		}, 2000);
	</script> -->
</body>

</html>