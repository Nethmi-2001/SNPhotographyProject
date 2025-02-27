<!DOCTYPE html>
<html>

<head>
    <title>Title of the Page</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Webpixels CSS */
        /* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
        /* URL: https://github.com/webpixels/css */

        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

        /* Bootstrap Icons */
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");


    </style>
</head>


<body>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
            id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <h4>SN PHOTOGRAPHY<br> </h4>
                </a>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar-parent-child">
                                <img alt="Image Placeholder"
                                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                    class="avatar avatar- rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span>
                            </div>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Billing</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="bi bi-house"></i> DASHBOARD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category') }}">
                                <i class="bi bi-bar-chart"></i> CATEGORY & PACKAGE
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="bi bi-chat"></i> PACKAGE
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('location') }}">
                                <i class="bi bi-chat"></i> LOCATION
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('booking') }}">
                                <i class="bi bi-bookmarks"></i> BOOKING
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="bi bi-bookmarks"></i> PAYMENT
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('photographer') }}">
                                <i class="bi bi-people"></i> PHOTOGRAPHER DETAILS
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="bi bi-chat"></i> REGISTERED USERS
                            </a>
                        </li>-->
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">
                    <!-- Navigation -->

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->
                    <ul class="navbar-nav">

                        <li class="nav-item">
                             <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button class="nav-link" >
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </button>
                               
                            </form>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
