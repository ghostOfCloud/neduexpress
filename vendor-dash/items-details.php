<?php 
    require "header.php"; 
    foreach ($object->ItemDetail() as $product){} 

?>

        <!-- Page Content  -->
        <div id="content" class=" p-5 pt-2">

            <div class="mycontainhide" id="storeItems">
                <div class="d-flex justify-content-between">
                    <h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Item ...</em></h4>
                    <a  href="#deleteModal" data-toggle="modal"><i class="fa fa-trash p-2 d-flex justify-content-center" style=""></i></a>
                </div>

                <!-- ======================= MODAL STARTS HERE ================================== -->
                <div class="modal fade" tabindex="-1" id="deleteModal">
                    <div class="modal-dialog" >
                        <div class="modal-content p-4">
                            <div class="modal-header">
                                <h5 class="modal-title login-title">Delete Item </h5>
                                <button type="button" class="close close-sign" data-dismiss="modal">&times;</button>                
                            </div>
                            <div class="modal-body">
                                <p> <b>WARNING!! </b> Once this action is taken, there is no going back. Click on 'delete' to delete all the details about this item.</p>
                                <p class="text-center"><b>Delete item?</b></p>
                            </div>

                                <div class="text-center d-flex justify-content-between mb-3">
                                    <a href="#dltSuccessModal" data-toggle="modal" data-dismiss="modal" class="btn delete-btn">Delete </a>
                                    <!-- <button type="button" class="btn delete-btn" data-dismiss="modal">Delete</button> -->
                                    <button type="button" class="btn login-btn" data-dismiss="modal">Cancel</button>
                                </div>
                        
                        </div>
                    </div>
                </div>


                <!-- ======================= DELETE SUCCESS MESSAGE HERE ================================== -->
                <div class="modal fade" tabindex="-1" id="dltSuccessModal">
                    <div class="modal-dialog" >
                        <div class="modal-content p-4">
                            <div class="modal-header">
                                <h5 class="modal-title login-title">Delete Success </h5>
                                <button type="button" class="close close-sign" data-dismiss="modal">&times;</button>                
                            </div>
                            <div class="modal-body">
                            <p>Item details have been deleted successfully....</p>

                            <div class="text-center mb-4">
                                <span class="fa fa-check-circle animated tada infinite"></span>
                            </div>
                            </div>

                                <div class="text-right mb-3">
                                
                                    <!-- <button type="button" class="btn delete-btn" data-dismiss="modal">Delete</button> -->
                                    <button type="button" class="btn login-btn" data-dismiss="modal">CLOSE</button>
                                </div>
                        
                        </div>
                    </div>
                </div>



                    <!-- ============== DASHBOARD CONTENT ===================== -->
                <div class="container recomm-img mt-4" style=" ;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 p-2 img-orange-cont" style="position: relative;">
                            <div class="orange-cont animated slideInRight">

                            </div>

                            <div class="image-item animated zoomIn">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%; height: 100%;">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" style="width: 100%; height: 100%;">
                                        <div class="carousel-item active" style="width: 100%; height: 100%">
                                          <img src="../images/product_img/portfolio-5.jpg" class="img-fluid" style="width:100%;height: 100%">
                                        </div>
                                        <div class="carousel-item" style="width: 100%; height: 100%;">
                                          <img src="../images/product_img/portfolio-2.jpg" class="img-fluid" style="width:100%;height: 100%">
                                        </div>
                                        <div class="carousel-item" style="width: 100%; height: 100%;">
                                          <img src="../images/product_img/portfolio-8.jpg" class="img-fluid" style="width:100%;height: 100%">
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
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="prod-det-cont">
                                <h5><i><?php echo $product["name"]; ?></i></h5>
                                <p class="store-itemdet"> Product ID: <span> <?php echo $product["p_id"]; ?> </span> </p>
                                <p class="store-itemdet"> Category: <span> <?php echo $product["category"]; ?> </span> </p>
                                <p class="store-itemdet"> Quantity left: <span> <?php echo $product["quantity"]; ?> </span> </p>
                                <p class="store-itemdet"> Date uploaded : <span> 4th july </span> </p>
                                <p class="store-itemdet"> Comments: <span> 400 </span> </p>
                            </div>

                            <div class="text-right pt-md-4">
                                <a href="edit-items.php?ert1@3)\|)9$row[images]erd&&id=<?php echo $_GET["id"];?>&&cover=$cover" class="upload-btn edit-btn d-inline-flex px-md-5 " > Edit </a>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</html>