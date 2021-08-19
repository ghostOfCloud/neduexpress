<!doctype html>
<html lang="en">
  <head>
  	<title>vendor dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="../design-files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css-files/animate.css">
	<link rel="stylesheet" type="text/css" href="../css-files/index.css">
	<link rel="stylesheet" type="text/css" href="../css-files/dashboard.css">
	<link rel="stylesheet" href="../css-files/vendor_style.css">
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
		              <a href="add-items.html">Add items</a>
		          </li>
		          <li>
	              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Statistics</a>
	              <ul class="collapse list-unstyled" id="pageSubmenu">
	                <li>
	                    <a href="statistics.html">All Stats</a>
	                </li>
	                 <li>
	                    <a href="#">Finished products</a>
	                </li>
	                <li>
	                    <a href="high-demand.html">High demand</a>
	                </li>
	              </ul>
		          </li>
		          <li>
	              <a href="user-profile.html ">Profile</a>
		          </li>
		          <!-- <li>
	              <a href="#">Contact</a>
		          </li> -->
		        </ul>


		        <div class="footer" style="position:absolute;bottom:0;">
		        	<p>
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					</p>
		        </div>

		      </div>
	    	</nav>

	        <!-- Page Content  -->
	      <div id="content" class="p-4 p-md-5 pt-5">

	        <div class="mycontainhide" id="storeItems">
	        	<div >
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Finished products</em></h4>
	        	</div>

	        	<div class="container recomm-img mt-4">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-6">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-1.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-6">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-3.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-6">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-4.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-6">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-5.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-6">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-2.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-6 ">
							<div class="product-order-body-img">
								<a href="edit-items.html">
									<img src="../images/product_img/portfolio-8.jpg" class="img-fluid high-de-img">
								</a>
							</div>
						</div>

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