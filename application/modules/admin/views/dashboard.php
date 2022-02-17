<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-soft-primary">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Web Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="<?= base_url()?>backend_assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="<?= base_url()?>backend_assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 "><?= $_SESSION[ADMIN_USER_SESS_KEY]['fullName']?></h5>
                        <p class="text-muted mb-0 text-truncate">Web Developer</p>
                    </div>

                    <!-- <div class="col-sm-7">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">10</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <a href="javascript: void(0);">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Total Requests</p>
                                <h4 class="mb-0" id="spanT"><?= $countT; ?></h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-copy-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <a href="javascript: void(0);" onclick="updatePartnersRequest('a')">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Partner A</p>
                                <h4 class="mb-0" id="spanA"><?= $countA; ?></h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-archive-in font-size-24"></i>
                                </span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <a href="javascript: void(0);" onclick="updatePartnersRequest('b')">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Partner B</p>
                                <h4 class="mb-0" id="spanO"><?= $countO; ?></h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


            
                    