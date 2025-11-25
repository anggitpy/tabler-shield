<?= $this->extend('tabler/layout') ?>

<?= $this->section('content') ?>
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
<?= $this->endsection() ?>