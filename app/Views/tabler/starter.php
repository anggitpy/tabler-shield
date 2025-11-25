<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler x Shield Codeigniter 4</title>
    <link rel="icon" href="./favicon-dev.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon-dev.ico" type="image/x-icon" />

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="./assets/tabler/libs/jsvectormap/dist/jsvectormap.css?1764034196" rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./assets/tabler/css/tabler.css?1764034196" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PLUGINS STYLES -->
    <link href="./assets/tabler/css/tabler-flags.css?1764034196" rel="stylesheet" />
    <link href="./assets/tabler/css/tabler-socials.css?1764034196" rel="stylesheet" />
    <link href="./assets/tabler/css/tabler-payments.css?1764034196" rel="stylesheet" />
    <link href="./assets/tabler/css/tabler-vendors.css?1764034196" rel="stylesheet" />
    <link href="./assets/tabler/css/tabler-marketing.css?1764034196" rel="stylesheet" />
    <link href="./assets/tabler/css/tabler-themes.css?1764034196" rel="stylesheet" />
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN DEMO STYLES -->
    <link href="./assets/tabler/css/demo.css?1764034196" rel="stylesheet" />
    <!-- END DEMO STYLES -->

    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url('https://rsms.me/inter/inter.css');

        .feather {
            width: 18px;
            height: 18px;
        }
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>

    <div class="page">

        <!--  BEGIN SIDEBAR  -->
        <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <!-- BEGIN NAVBAR TOGGLER -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle sidebar navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END NAVBAR TOGGLER -->

                <!-- BEGIN NAVBAR LOGO -->
                <div class="navbar-brand navbar-brand-autodark">
                    <a href="." aria-label="Tabler">
                        <img src="https://placehold.co/150x50" class="img-fluid" alt="">
                    </a>
                </div>
                <!-- END NAVBAR LOGO -->

                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <!-- BEGIN NAVBAR MENU -->
                    <ul class="navbar-nav pt-lg-3">

                        <li class="nav-item">
                            <a class="nav-link <?= url_is('starter') ? 'active' : '' ?>" href="./starter">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i data-feather="bar-chart"></i>
                                </span>
                                <span class="nav-link-title">
                                    Dashboards
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= url_is('users*') ? 'active' : '' ?>" href="./users">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <i data-feather="users"></i>
                                </span>
                                <span class="nav-link-title">
                                    Users
                                </span>
                            </a>
                        </li>


                    </ul>
                    <!-- END NAVBAR MENU -->
                </div>
            </div>
        </aside>
        <!--  END SIDEBAR  -->

        <!-- BEGIN NAVBAR  -->
        <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <!-- BEGIN NAVBAR TOGGLER -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle primary navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END NAVBAR TOGGLER -->
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex me-3">
                        <!-- BEGIN THEME TOGGLE -->
                        <div class="nav-item">
                            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i data-feather="moon"></i>
                            </a>
                            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
                                data-bs-placement="bottom">
                                <i data-feather="sun"></i>
                            </a>
                        </div>
                        <!-- END THEME TOGGLE -->

                    </div>

                    <!-- BEGIN USER MENU -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(https://placehold.co/200x200)">
                            </span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a class="dropdown-item" href="./profile.html">
                                <i data-feather="user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i data-feather="bar-chart-2"></i> Analytics
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">Settings &amp; Privacy</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="#">Sign out</a>

                        </div>
                    </div>
                    <!-- END USER MENU -->
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <!-- BEGIN NAVBAR MENU -->
                    <nav aria-label="Primary">
                        <!-- BEGIN NAVBAR MENU -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-dashboards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i data-feather="pie-chart"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Nav Link
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        Dropdown Link
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Dropdown Link
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <!-- END NAVBAR MENU -->
                    </nav>
                    <!-- END NAVBAR MENU -->
                </div>
            </div>
        </header>
        <!-- END NAVBAR  -->

        <div class="page-wrapper">
            <!-- BEGIN PAGE HEADER -->

            <!-- BEGIN PAGE HEADER -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h1 class="page-title">
                                Combo layout
                            </h1>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-none d-sm-inline">
                                    <a href="#" class="btn btn-1">
                                        New view
                                    </a>
                                </span>
                                <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block">
                                    <i data-feather="plus"></i>
                                    Create new report
                                </a>
                                <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-2">
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                </a>
                            </div>
                            <!-- BEGIN MODAL -->
                            <!-- END MODAL -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER -->

            <!-- BEGIN PAGE BODY -->
            <main id="content" class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-12 col-sm d-flex flex-column">
                                            <h3 class="h2">Welcome back, Shield</h3>
                                            <p class="text-muted">You have 5 new messages and 2 new notifications.</p>
                                            <div class="row g-5 mt-auto">
                                                <div class="col-auto">
                                                    <div class="subheader">Today's Sales</div>
                                                    <div class="d-flex align-items-baseline">
                                                        <div class="h3 me-2">6,782</div>
                                                        <div class="me-auto">
                                                            <span class="text-green d-inline-flex align-items-center lh-1">
                                                                7% <i data-feather="arrow-up"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                                            <span class="visually-hidden">75% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="subheader">Growth Rate</div>
                                                    <div class="d-flex align-items-baseline">
                                                        <div class="h3 me-2">78,4%</div>
                                                        <div class="me-auto">
                                                            <span class="text-red d-inline-flex align-items-center lh-1">
                                                                -1% <i data-feather="arrow-down"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" aria-label="78% Complete">
                                                            <span class="visually-hidden">78% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto d-flex justify-content-center">
                                            <a href="#">
                                                <img src="https://placehold.co/300x200" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
            <!-- END PAGE BODY -->

            <!--  BEGIN FOOTER  -->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <nav aria-label="Footer">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item"><a href="https://docs.tabler.io" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                                    <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                                    <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                                    <li class="list-inline-item">
                                        <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-pink icon-inline icon-4">
                                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                            </svg>
                                            Sponsor
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; <?= date('Y') ?>
                                    <a href="." class="link-secondary">Tabler</a>.
                                    All rights reserved.
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END FOOTER  -->

        </div>
    </div>
    


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="./assets/tabler/js/tabler.js" defer></script>
    <script src="./assets/feather/feather.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN DEMO SCRIPTS -->
    <script src="./assets/tabler/js/demo.js" defer></script>
    <!-- END DEMO SCRIPTS -->

    <script>
        feather.replace();
    </script>

</body>

</html>