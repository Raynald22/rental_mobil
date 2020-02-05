<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/ubsi.png') ?>">
    <title>Rental Mobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="container d-none d-lg-block">
            <div class="row">
                <div class="col-12 text-center mb-4 mt-5">
                    <h1 class="mb-5 site-logo"><a href="<?= base_url('user/dashboard'); ?>" class="text-black h2 mb-0">Rental Mobil<span class="text-primary">.</span> <img src="<?= base_url('assets/img/Logo.jpg') ?>" alt=""> </a></h1>
                </div>
            </div>
        </div>
        <header class="site-navbar py-md-1 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
                        <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">UBSI<span class="text-primary">.</span> </a></h1>
                    </div>

                    <nav class="navbar navbar-expand navbar-light bg-light mx-1 row-center ml-1">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav justify-content">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url('user/dashboard') ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?= base_url('user/mobil') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Mobil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('user/mobil') ?>">List Mobil</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Konfirmasi
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('user/konfirmasi') ?>">Pembayaran</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="<?= base_url('user/about') ?>" tabindex="-1" aria-disabled="true">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="<?= base_url('user/carasewa') ?>" tabindex="-1" aria-disabled="true">Cara Sewa</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Profile
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= base_url('user/profile') ?>">Edit Profile</a>
                                        <a class="dropdown-item" href="<?= base_url('auth') ?>">Login</a>
                                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                                    </div>
                                </li>

                        </div>
                    </nav>

                    </ul>

                    <div align="right">
                        <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <i class="fas fa-shopping-cart fa-sm"></i>
                                    <?php
                                    $keranjang = 'Keranjang : ' . $this->cart->total_items() ?>
                                    <?php echo anchor('user/keranjang', $keranjang)  ?>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

        </header>