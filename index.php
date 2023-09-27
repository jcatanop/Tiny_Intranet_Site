<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Intranet" />
    <meta name="author" content="Jorge Cataño" />
    <title>INTRANET</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/bootstrap_v5.1.3.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
  </head>
  <body>
<?php include "components/header.php"; ?>
  <!-- Page content-->
    <div class="container mt-5" style="max-width:900px">
        <?php include 'components/content.php'?> 
    </div>
<?php include 'components/modal.php' ?>
<?php include 'components/footer.php' ?>
  </body>
</html>