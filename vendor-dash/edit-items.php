<?php 
    require "header.php";     
    foreach ($object->ItemDetail() as $product){} 
 ?>


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