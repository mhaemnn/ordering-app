<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>apordering | Home</title>
  <!-- icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- bootstrap online -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- mystyle -->
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <!-- header -->
  <?php include "header.php"; ?>
  <div class="container-lg">
    <div class="row">
      <!-- sidebar -->
      <?php include "sidebar.php"; ?>
      <!-- content -->
      <?php
      if (isset($_GET['x']) && $_GET['x'] == 'home') {
        include 'home.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'pemesanan') {
        include 'pemesanan.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'persetujuan') {
        include 'persetujuan.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'bahanBakar') {
        include 'bahanBakar.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'jadwalService') {
        include 'jadwalService.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'laporan') {
        include 'laporan.php';
      }
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>