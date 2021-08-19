
<?php require "header.php"; ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="mycontainhide" id="storeItems">
                <div>
                    <h4 style="display: inline-flex; border-bottom: 2px solid #F58634"><em>Edit Profile</em></h4>
                </div>

                <div class="container recomm-img mt-4">

                    <div class="">
                        <form method="POST" action="../Controller/ProcessController.php" enctype="multipart/form-data" id="uploadForm">
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <label for="inputEmail"><em>Firstname:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="fname" value="<?php echo $user['name'];?>" placeholder="Enter firstname">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <label for="inputEmail"><em>Lastname:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="lname" value="<?php echo $user['l_name'];?>" placeholder="Enter lastname">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <label for="inputEmail"><em>Email:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="email" class="form-control" name="email" value="<?php echo $user['email'];?>" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <label for="inputEmail"><em>Store name:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="store_name" value="<?php echo $user['store'];?>" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <label for="inputEmail"><em>Store Description:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="store_desc" value="<?php echo $user['description'];?>" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <label for="inputEmail"><em>Location:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="location" value="<?php echo $user['address'];?>" placeholder="Enter Location">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <label for="inputEmail"><em>Phone Number:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="phone" value="<?php echo $user['phone'];?>" placeholder="Enter Phone Number">
                                    </div>
                                </div>

                                <!-- <div class="col-lg-4 col-sm-12">
                                    <label for="inputEmail"><em>Firstname:</em></label>
                                    <div class="input-group mb-4">
                                        <input id="text" type="text" class="form-control" name="firstname" value="anah@gmail.com" placeholder="">
                                    </div>
                                </div> -->
                            </div>

                            <div class="text-right">
                                <input type="submit" name="save_profile" value="Save" class="upload-btn mt-4 px-md-5 py-md-2">
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