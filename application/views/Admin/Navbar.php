<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('asset/img/ai.png'); ?>" type="image/x-icon">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('')?>">
                <div class="sidebar-brand-text mx-3">Sistem Transaksi</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            <!-- Nav Item - Produk -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('')?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Produk</span></a>
            </li>
             <!-- Nav Item - Transaksi -->
             <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Dashboard_adm/Transaksi')?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('User_Content')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User Content</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->