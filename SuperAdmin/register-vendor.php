<?php require "header.php"; ?>

<!-- Begin Page Content -->
<div class="container" > 

    <!-- Content Row -->
    <div class="row">
        <div class="container card">
            <div class="card-body">
                <form action="../Controller/SuperAdminController.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputCategory1">Vendor Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter Vendor Name" name="name">

                        <!-- <select class="form-control" id="exampleFormControlSelect1" name="category">
                            <option value="electronics">1</option>
                            <option value="grocery">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select> -->
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputPhoneNumber1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputPhoneNumber1" placeholder="+234 90..." name="phone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            <label for="exampleInputLocation1">Location</label>
                            <input type="text" class="form-control" id="exampleInputLocation1" aria-describedby="Location" placeholder="Enter Vendor Location" name="address">
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputPhoneNumber1">Upload Vendor Cover Photo</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload Cover </span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="filename" onchange="return fileValidation()" name="file">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="registerVendor" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script src="../Model/FileUploadValidation.js"></script>

</body>

</html>