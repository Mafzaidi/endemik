<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $tittle; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.6.1/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome-5.15.4/css/all.min.css'); ?>">
</head>

<body>
<div id="wrapper">
    <!-- Sidebar Content-->
    <div class="d-flex" id="sidebar-content-wrapper">
        <!-- Sidebar -->
        <div class="d-flex flex-column navbar-light bg-white sidebar" id="sidebarMenu">
            <ul class="nav flex-column">
                <a href="#" class="d-flex sidebar-brand align-items-center justify-content-center fa fa-e"><span>ndemik</span></a>
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fas fa-align-justify"></i>
                        <span>Form</span>
                    </a>
                    <div id="collapseTwo" class="collapse bg-light">
                        <ul class="nav flex-column">
                            <li class="nav-item p-2">
                                <a class="text-decoration-none" href="#"><i class="fas fa-file-alt"></i><span>Peminjaman Medrec</span></a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="text-decoration-none" href="#"><i class="fas fa-file-alt"></i><span>Pemakaian Alat</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-folder-open"></i>
                        <span>Link</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-folder-open"></i>
                        <span>Link</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-folder-open"></i>
                        <span>Link</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End of Sidebar -->

        <!-- Main Content -->
        <div id="main-content-wrapper" class="d-flex flex-column">
            <!-- navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <button class="sidebar-toggler" id="sidebarToggle">
                    <i class="fas fa-angle-double-left"></i>
                </button>
                <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Users</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Navbar -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content -->
</div>

    <div class="container-fluid">

    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-4.6.1/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    
    <!-- main.js -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>