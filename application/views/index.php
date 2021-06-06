<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fontawesome/css/all.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/datatables.min.css">

    <!-- Overhang -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/overhang/overhang.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

    <!-- Jquery -->
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>

    <!-- scripts -->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/overhang/overhang.min.js"></script>

    <title><?= $_title ?></title>
</head>

<body>

    <div class="container">

        <?= $_topbar; ?>

        <!-- Main -->
        <?= $_body; ?>
        <!-- End Main -->

        <?= $_footer; ?>

    </div>

</body>

<!-- Custom Script -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>

</html>