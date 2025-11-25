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