<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin & Dashboard " name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="backend_assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url()?>backend_assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url()?>backend_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url()?>backend_assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    </head>
    <body data-sidebar="dark" data-base-url="<?php echo base_url(); ?>" data-auth-url="">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="<?= base_url()?>backend_assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="javascript: void(0);">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?= base_url()?>backend_assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form method="post" action="login" id="login-form" class="form-horizontal">
        
                                        <div class="form-group">
                                            <label for="username">Email ID</label>
                                            <input type="email" name="email" class="form-control" id="username" placeholder="Enter username" required="">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required="">
                                        </div>
                
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="card border border-primary">
                            <div class="card-header bg-transparent border-primary">
                                <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Please use the below credentials for Sign in</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mt-0">Email</h5>
                                <p class="card-text">admin@gmail.com</p>

                                <h5 class="card-title mt-0">Password</h5>
                                <p class="card-text">123456</p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url()?>backend_assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url()?>backend_assets/libs/node-waves/waves.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script> 
        
        <!-- App js -->
        <script src="<?= base_url()?>backend_assets/js/app.js"></script>
        <script src="<?= base_url()?>backend_assets/custom/login.js"></script>
    </body>
</html>
