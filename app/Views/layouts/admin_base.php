<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voting System <?= $title ?? '' ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/voter-style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/result-style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/election-style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/candidate-style.css') ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?= $this->include('partials/admin/management_navbar') ?>  <!--for Navbar Section -->

    <?= $this->include('partials/admin/management_sidebar') ?> <!--for Sidebar Section -->

    <main class="content-wrapper p-3">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/admin/management_footer') ?> <!--for Footer Section -->



    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</body>

</html>
