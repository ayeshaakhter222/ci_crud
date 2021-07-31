<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.80.0">

        <?= csrf_meta() ?>

        <title>CRUD</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('vendor/bootstrap-4.6.0/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('vendor/dashboard.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }
            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
            }
        </style>
    </head>
    <body>
        <?= $this->include('partials/topnav.php') ?>
        <div class="container-fluid">
            <div class="row">
                <?= $this->include('partials/sidebar.php') ?>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="pt-3 pb-2 mb-3 border-bottom">
                        <?= $this->renderSection('content') ?>
                    </div>
                </main>
            </div>
        </div>
        <script src="<?php echo base_url('vendor/jquery-3.6.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendor/bootstrap-4.6.0/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script> -->
        <script src="<?php echo base_url('vendor/dashboard.js'); ?>"></script>
        <script src="<?php echo base_url('assets/custom.js'); ?>"></script>
    </body>
</html>