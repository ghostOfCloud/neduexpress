<?php require "header.php"; ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="mycontainhide" id="storeItems">
                <div>
                    <h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Add Items</em></h4>
                </div>

                <div class="container recomm-img mt-4">
                    <div class="container">
                        <form method="POST" action="../Controller/ProcessController.php" enctype="multipart/form-data" id="form">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-7" style="border-right: 1px solid grey">
                                        <label for="inputEmail"><em>Product Name:</em></label>
                                        <div class="input-group mb-4">
                                            <input id="text" type="text" class="form-control" name="p_name" placeholder="Enter product Name">
                                        </div>

                                        <label for="inputEmail"><em>Product Description:</em></label>
                                        <div class="input-group mb-4">
                                            <textarea id="email" class="form-control" name="p_description" placeholder="Enter product Description">
                                            </textarea>
                                        </div>
                                        <hr>

                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-xs-12 mb-4">
                                                <label for="inputEmail"><em>Product Price:</em></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="p_price" placeholder="Enter price for product">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xs-12 mb-4">
                                                <label for="inputEmail"><em>Product Quantity:</em></label>
                                                <div class="input-group">
                                                    <input id="email" type="number" class="form-control" name="p_quantity" placeholder="Enter quantity of product">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-4">
                                            <label for="inputEmail"><em>Product Category:</em></label>
                                            <div class="form-group" style="width: 100%">
                                                <select class="form-control" name="p_category" id="sel1">
    												<option>Choose Category</option>
    												<option value="">tools and equipments</option>
    												<option value="">Kiddies</option>
    												<option value="">women clothing</option>
    												<option value="">shoes</option>
  												</select>
                                            </div>
                                        </div>

                                        <!-- NEW -->
                                        <div class="file-image mt-4" >
                                            <label for="inputEmail"><em>Product Images:</em></label><br>
                                            <input type="file" name="image" name="files[]" id="image" multiple="" class="d-none" onchange="image_select()">
                                            <button class="upload-btn" type="button" onclick="document.getElementById('image').click()">Choose Image</button>
                                        </div>

                                        <!-- submit button  -->
                                        <div class="text-right">
                                            <input type="submit" name="p_upload" value="Upload" class="upload-btn mt-4">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-5">

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</html>