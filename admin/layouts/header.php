<?php include("auth.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?? ''; ?> | Wrpa Pack N Carry - Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Wrpa Pack N Carry is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features." />
    <meta name="keywords" content="Wrpa Pack N Carry, admin dashboard, ThemeForest, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template" />
    <meta name="author" content="Coderthemes" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/wrap-logo-2.png" />

    <!-- Vector Maps css -->
    <link href="assets/plugins/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>
    <script src="demo.js"></script>

    <!-- Vendor css -->
    <link href="assets/css/vendors.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link id="app-style" href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom css -->
    <link id="app-style" href="assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper">
        <header class="app-topbar">
            <div class="container-fluid topbar-menu">
                <div class="d-flex align-items-center gap-2">
                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.php" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/wrap-logo.png" alt="logo" />
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/wrap-logo.png" alt="small logo" />
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.php" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/wrap-logo.png" alt="dark logo" />
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/wrap-logo.png" alt="small logo" />
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button btn btn-primary btn-icon">
                        <i class="ti ti-menu-4"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu">
                        <i class="ti ti-menu-4"></i>
                    </button>

                    <div>
                        <span class="text-main">
                            <strong>Wpap Pack N Carry | Safewrap</strong>
                        </span>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-2">

                    <div id="user-dropdown-detailed" class="topbar-item nav-user">
                        <div class="dropdown">
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" href="#!" aria-haspopup="false" aria-expanded="false">
                                <i class="fa-solid fa-circle-user" style="color: #E3DBBB; font-size: 25px; margin-right: 10px"></i>
                                <div class="d-lg-flex align-items-center gap-1 d-none">
                                    <span>
                                        <h5 class="my-0 lh-1 pro-username"><?php echo $_SESSION['admin_name'] ?? 'Admin'; ?></h5>
                                        <span class="fs-xs lh-1">Admin Head</span>
                                    </span>
                                    <i class="ti ti-chevron-down align-middle"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- Header -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome back 👋!</h6>
                                </div>

                                <!-- My Profile -->
                                <a href="profile.php" class="dropdown-item">
                                    <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Profile</span>
                                </a>

                                <!-- Logout -->
                                <a href="logout.php" class="dropdown-item fw-semibold">
                                    <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->
        <div class="sidenav-menu">
            <!-- Brand Logo -->
            <a href="index.php" class="logo">
                <span class="logo logo-light">
                    <span class="logo-lg"><img src="assets/images/wrap-logo.png" alt="logo" /></span>
                    <span class="logo-sm"><img src="assets/images/wrap-logo.png" alt="small logo" /></span>
                </span>

                <span class="logo logo-dark">
                    <span class="logo-lg"><img src="assets/images/wrap-logo.png" alt="dark logo" style="width: 80px;height:80px;" /></span>
                    <span class="logo-sm"><img src="assets/images/wrap-logo.png" alt="small logo" /></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <!-- <button class="button-on-hover">
                <span class="btn-on-hover-icon"></span>
            </button> -->

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-offcanvas">
                <i class="ti ti-menu-4 align-middle"></i>
            </button>

            <div class="scrollbar" data-simplebar="">
                <div id="user-profile-settings" class="sidenav-user" style="background: url(assets/images/user-bg-pattern.svg)">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="profile.php" class="link-reset">
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md" />
                                <span class="sidenav-user-name fw-bold"><?php echo $_SESSION['admin_name'] ?? 'Admin'; ?></span>
                                <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
                                <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                            </a>

                            <div class="dropdown-menu">
                                <!-- Header -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome back!</h6>
                                </div>

                                <!-- My Profile -->
                                <a href="profile.php" class="dropdown-item">
                                    <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Profile</span>
                                </a>

                                <!-- Settings -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-settings-2 me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Account Settings</span>
                                </a>

                                <!-- Lock -->
                                <a href="auth-lock-screen.html" class="dropdown-item">
                                    <i class="ti ti-lock me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- Logout -->
                                <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                                    <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Sidenav Menu -->
                <div id="sidenav-menu">
                    <ul class="side-nav">
                        <li class="side-nav-title mt-2 text-main" data-lang="main">Main</li>
                        <li class="side-nav-item">
                            <a href="index.php" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                                <span class="menu-text" data-lang="apps-chat">Dashboards</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="contact-form.php" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-users"></i></span>
                                <span class="menu-text" data-lang="apps-chat">Contact Form</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="enquire-form.php" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-message"></i></span>
                                <span class="menu-text" data-lang="apps-chat">Enquire Form</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidenav Menu End -->

        <div class="content-page d-flex flex-column">
        <div class="container-fluid flex-grow-1" style="min-height: calc(100vh - 200px);">
            <div class="page-title-head d-flex align-items-center mt-3">
                <div class="flex-grow-1">
                    <h4 class="page-main-title m-0"><?php echo $pageName ?? ''; ?></h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wrap Pack N Carry</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $pageName ?? ''; ?></a></li>
                    </ol>
                </div>
            </div>