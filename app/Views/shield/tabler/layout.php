<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $this->renderSection('title') ?></title>
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

    <?= $this->renderSection('main') ?>

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