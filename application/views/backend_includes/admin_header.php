<!DOCTYPE html>
<html lang="en">
    <?php 
        $backend_assets =  base_url().'backend_assets/';
    ?>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= $backend_assets;?>images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= $backend_assets;?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= $backend_assets;?>css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= $backend_assets;?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
         <!-- sweetalert -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
        <!-- toastr -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    </head>

    
    <body data-sidebar="dark" data-base-url="<?php echo base_url(); ?>" data-auth-url="<?php echo $user['authToken']; ?>">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="javascript: void(0);" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= $backend_assets;?>images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= $backend_assets;?>images/logo-dark.png" alt="" height="22">
                                </span>
                            </a>

                            <a href="javascript: void(0);" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= $backend_assets;?>images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= $backend_assets;?>images/logo-light.png" alt="" height="30">
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= $backend_assets;?>images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1" key="t-henry"><?= substr($_SESSION[ADMIN_USER_SESS_KEY]['fullName'], 0, 6);?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="javascript:void(0);" onclick="confirmAction(this);" data-message="You can improve your security further after logging out by closing this opened browser"  data-id="0" data-url="adminapi/logout" data-list="0"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right" id="spanH"><?= $countT; ?></span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">