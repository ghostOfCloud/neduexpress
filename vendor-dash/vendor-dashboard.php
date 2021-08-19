<?php require "header.php"; ?>



        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="mycontainhide" id="storeItems">
                <div class="d-flex justify-content-between">
                    <h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Store Items</em></h4>
                    <div class="" onclick="redirectPage()"><i class="fa fa-plus p-2 d-flex justify-content-center" style=""></i></div>
                </div>

                <div class="container recomm-img mt-4">
                    <div class="row">
                        <!-- <div class="col-md-4 col-sm-6 col-6"> -->
                            <?php 
                            foreach($object->AllProducts() as $products){
                                echo $products;
                            } 
                            ?>
                        <!-- </div> -->

                        <!-- <div class="col-md-4 col-sm-6 col-6">
                            <div class="product-order-body-img">
                                <a href="items-details.html">
                                    <img src="../images/product_img/portfolio-3.jpg" class="img-fluid">
                                </a>
                            </div>

                            <div class="product-order-body-img mt-3">
                                <a href="items-details.html">
                                    <img src="../images/product_img/portfolio-5.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-6">
                            <div class="product-order-body-img">
                                <a href="items-details.html">
                                    <img src="../images/product_img/portfolio-9.jpg" class="img-fluid">
                                </a>
                            </div>

                            <div class="product-order-body-img mt-3">
                                <a href="items-details.html">
                                    <img src="../images/product_img/portfolio-2.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div> -->

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</html>