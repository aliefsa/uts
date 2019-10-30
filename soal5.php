<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Alief S.A.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="soal2.php">Produk</a>
          </li>
        </ul>
        <form action="index.php" class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
        </form>
      </div>
    </nav><br>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="jumbotron">
                  <form action="soal2.php" method="post">
                    <div class="form-group">
                      <p class="lead">Apakah Anda Ingin Menambahkan Data Lagi</p>
                      <hr class="my-4">
                      <p>Silahkan klik "Lanjut" untuk pindah kehalaman selanjutnya</p>
                      <?php
                      if (isset($_POST['ok'])) {
                        $email = $_POST['email'];
                        $pass = $_POST['pass']; ?>

                        <input type="hidden" name="email" value="<?php echo "$email"; ?>">
                        <input type="hidden" name="pass" value="<?php echo "$pass"; ?>">
                      <center><button type"submit" name="lanjut" class="btn btn-primary">Lanjut</button></center>
                      <?php 
                    } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Content --> 

    <!-- Footer -->
    <footer>
        <br><center>&copy; SMK ASSALAAM BANDUNG</center>
    </footer>

    <!-- Enf Footer -->

    <!-- JS -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
    
</body>
</html>