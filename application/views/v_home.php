<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.6.1/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
</head>

<body>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="nav flex-column navbar-light bg-light sidebar" id="sidebar">
        <a href="#" class="d-flex sidebar-brand align-items-center justify-content-center fa fa-e">ndemik</a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="#">Form</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
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

    <div class="container-fluid">

    </div>
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-4.6.1/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>