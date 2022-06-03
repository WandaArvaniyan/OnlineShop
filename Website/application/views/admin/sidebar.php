<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Online Shop</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> -->
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url()?>user/login">Logout</a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">ADMIN</div>
                            <a class="nav-link" href="<?php echo base_url()?>admin/dashboard/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>admin/tbl_produk/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></div>
                                Data Produk
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>admin/tbl_produk/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></div>
                                Data Kategori
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>admin/tbl_produk/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></div>
                                Data Order
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>admin/tbl_produk/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shirt"></i></div>
                                Data Pelanggan
                            </a>
                            
                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">

                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>

                        <!-- <div class="sb-sidenav-menu-heading">Tentang</div>
                            <a class="nav-link" href="<?php echo base_url()?>shopping/tampil_cart">
                                <div class="sb-nav-link-icon"></div>
                                Keranjang Belanja
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>page/cara_bayar">
                                <div class="sb-nav-link-icon"></div>
                                Cara Bayar
                            </a>
                            <a class="nav-link" href="<?php echo base_url()?>page/tentang">
                                <div class="sb-nav-link-icon"></i></div>
                                About
                            </a> -->
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">