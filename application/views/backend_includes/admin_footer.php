</div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

               

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url()?>backend_assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="<?= base_url()?>backend_assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="<?= base_url()?>backend_assets/js/pages/dashboard.init.js"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
        
        <?php if(!empty($front_scripts)) { load_js($front_scripts);} //load required page scripts ?>

        <!-- App js -->
        <script src="<?= base_url()?>backend_assets/js/app.js"></script>
    </body>

</html>