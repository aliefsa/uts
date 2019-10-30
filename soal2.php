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
      </div>
    </nav><br>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Masukan Data</div>
                    <div class="card-body">
                        <form action="soal3.php" method="post">
                            <?php
                            if (isset($_POST['submit'])) {
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                ?>
                                <div class="form-group">
                                    <label for="">Nama</label> 
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label> 
                                    <textarea name="alamat" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="radio" name="jk" value="Laki-laki" reqiured>Laki-laki
                                    <input type="radio" name="jk" value="Perempuan" reqiured>Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pembelian</label> 
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah</label> 
                                    <input type="text" name="jumlah" class="form-control" required>
                                </div>
                                <div class="form-group"> 
                                    <input type="hidden" name="email" value="<?php echo "$email"; ?>">
                                    <input type="hidden" name="pass" value="<?php echo "$pass"; ?>">
                                </div><hr>
                                <div class="form-group">
                                    <button type"submit" name="submit" class="btn btn-primary">Masukan</button>
                                </div>
                                <?php 
                            } ?>
                            <?php
                            if (isset($_POST['lanjut'])) {
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                ?>
                                <div class="form-group">
                                    <label for="">Nama</label> 
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label> 
                                    <textarea name="alamat" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="radio" name="jk" value="Laki-laki" reqiured>Laki-laki
                                    <input type="radio" name="jk" value="Perempuan" reqiured>Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pembelian</label> 
                                    <input type="date" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah</label> 
                                    <input type="text" name="jumlah" class="form-control" required>
                                </div>
                                <div class="form-group"> 
                                    <input type="hidden" name="email" value="<?php echo "$email"; ?>">
                                    <input type="hidden" name="pass" value="<?php echo "$pass"; ?>">
                                </div><hr>
                                <div class="form-group">
                                    <button type"submit" name="submit" class="btn btn-primary">Masukan</button>
                                </div>
                                <?php 
                            } ?>
                        </form>
                    </div>
                </div>
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