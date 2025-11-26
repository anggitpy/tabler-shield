<!doctype html>
<html lang="en" data-bs-theme-primary="indigo">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler x Shield Codeigniter 4</title>
    <link rel="icon" href="./favicon-dev.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon-dev.ico" type="image/x-icon" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="./assets/tabler/css/tabler.css?1764034196" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PLUGINS STYLES -->    
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

    <?= $this->renderSection('css') ?>

    <!-- END CUSTOM FONT -->
</head>

<body>

    <div class="page">

        <?= $this->include('tabler/partials/sidebar') ?>

        <?= $this->include('tabler/partials/navbar') ?>


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
                <?= $this->renderSection('content') ?>
            </main>
            <!-- END PAGE BODY -->

            <?= $this->include('tabler/partials/footer') ?>

        </div>
    </div>
    


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="./assets/tabler/js/tabler.js" defer></script>
    <script src="./assets/tabler/js/tabler-theme.min.js" defer></script>
    <script src="./assets/feather/feather.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN DEMO SCRIPTS -->
    <script src="./assets/tabler/js/demo.js" defer></script>
    <!-- END DEMO SCRIPTS -->

    <script>
        feather.replace();
    </script>

    <?= $this->renderSection('js') ?>

</body>

</html>