<?php require "header.php"; ?>

<!-- Begin Page Content -->
<div class="container" > 

    <!-- Content Row -->
    <div class="row">
        <div class="container mt-4">
            <form method="POST" action="../Controller/SuperAdminController.php" enctype="multipart/form-data" id="uploadForm">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-sm-7" style="border-right: 1px solid grey">
                            
                            <label for="store">Store Name</label>
                            <div class="input-group mb-4">
                                <input id="store" type="text" class="form-control" name="store" placeholder="Enter Store Name">
                            </div>

                            <label for="name">Vendor Name</label>
                            <div class="input-group mb-4">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Enter Vendor Name">
                            </div>
                            <hr>

                            <label for="email">Vendor Email</label>
                            <div class="input-group mb-4">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter Vendor Email">
                            </div>

                            <label for="phone">Vendor Phone Number</label>
                            <div class="input-group mb-4">
                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Enter Vendor Phone Number">
                            </div>
                            <hr>

                            <label for="location">Vendor Location</label>
                            <div class="input-group mb-4">
                                <input id="location" type="text" class="form-control" name="location" placeholder="Enter Vendor Location">
                            </div>

                            <label for="file" class="mt-4">Vendor Cover Picture</label>
                            <div class="file-image">
                                <input type="file" name="file" class="text-secondary" id="file">
                            </div>

                            <!-- submit button  -->
                            <div class="text-right">
                                <input type="submit" value="Register Vendor" name="register_vendor" class="btn mt-4 btn-primary">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-5">
                                <img src="img/upload.jpg" class="">
                        </div>
                    </div>
                </div>

            </form>
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