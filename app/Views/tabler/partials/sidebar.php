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