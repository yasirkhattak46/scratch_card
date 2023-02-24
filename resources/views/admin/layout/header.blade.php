<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>RublyX - Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{url('public/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/css/components.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/bundles/pretty-checkbox/pretty-checkbox.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{url('public/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{url('public/assets/img/scratch_logo.jpg')}}'/>
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                                                                                         src="{{asset('public/assets/img/user.png')}}"
                                                                                                         class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello {{Auth::user()->name}}</div>
                        <a href="{{route('profile')}}" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:" id="logout" class="dropdown-item has-icon text-danger"> <i
                                class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
