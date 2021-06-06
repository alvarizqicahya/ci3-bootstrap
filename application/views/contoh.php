<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/datatables.min.css">

    <!-- Overhang -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/overhang/overhang.min.css">

    <!-- Jquery -->
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>

    <!-- scripts -->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/overhang/overhang.min.js"></script>

    <title>Contoh!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <button class="btn btn-primary" id="tombol">klik</button>

</body>

<script>
    $('#tombol').click(function() {
        $('body').overhang({
            type: 'success',
            duration: 0.4,
            message: 'ini contoh!'
        });
    })
</script>

</html>