<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Vedaranyam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('vedharanyam/assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vedharanyam/assets/js/bootstrap.min.js') }}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="{{ asset('vedharanyam/assets/css/font-awesome/6.1.1/css/all.min.css') }}">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('vedharanyam/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vedharanyam/assets/css/mediaqueries.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vedharanyam/assets/css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vedharanyam/assets/css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('vedharanyam/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vedharanyam/assets/css/custome.css') }}">
</head>

<body>
    <div class="banner-section-outer">
        <header>
            <div class="main_header">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand" href="index.html">
                            <figure class="mb-0"><img src="{{ asset('vedharanyam/assets/images/yogastic_logo.png') }}" alt=""></figure>
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('guest.index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.treatment') }}">Treatments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.product') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.gallery') }}">Gallery</a>
                                </li>
                                   <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.blogpage') }}">Blog</a>
                                </li>
                                   <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guest.contact') }}">Contact</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>