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
                    <div class="card-header">Masukan Data Produk</div>
                    <div class="card-body">
                        <form action="soal4.php" method="post">
                            <div class="form-group">
                                <?php
                                if (isset($_POST['submit'])) {
                                    $email = $_POST['email'];
                                    $pass = $_POST['pass'];
                                    $nama = $_POST['nama'];
                                    $alamat = $_POST['alamat'];
                                    $jk = $_POST['jk'];
                                    $tanggal = $_POST['tanggal'];
                                    $jml_form = $_POST['jumlah'];
                                    for ($a = 0; $a < $jml_form; $a++) { ?> 
                                        <div class="form-group">
                                            <label for="">Nama Barang</label>                  
                                            <input type="text" name="nabar[]" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kode Barang</label>
                                            <input type="text" name="kode[]" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Barang</label>
                                            <select name="jenis[]" class="form-control">
                                                <option value=""></option>
                                                <option value="Senjata">Senjata</option>
                                                <option value="Kuliner">Kuliner</option>
                                                <option value="Kendaraan">Kendaraan</option>
                                                <option value="Elektronik">Elektronik</option>
                                                <option value="Perangkat Digital">Perangkat Digital</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Produk</label>                  
                                            <input type="text" name="harga[]" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah Produk</label>                  
                                            <input type="text" name="jumpro[]" class="form-control" required>
                                        </div>
                                        <div class="form-group"> 
                                            <input type="hidden" name="email" value="<?php echo "$email"; ?>">
                                            <input type="hidden" name="pass" value="<?php echo "$pass"; ?>">
                                        </div>
                                        <div class="form-group"> 
                                            <input type="hidden" name="nama" value="<?php echo "$nama"; ?>">
                                            <input type="hidden" name="alamat" value="<?php echo "$alamat"; ?>">
                                            <input type="hidden" name="jk" value="<?php echo "$jk"; ?>">
                                            <input type="hidden" name="tanggal" value="<?php echo "$tanggal"; ?>">
                                            <input type="hidden" name="jumlah" value="<?php echo "$jml_form"; ?>">
                                        </div><br><hr><br>
                                    <?php 
                                } ?>
                                <div class="form-group">
                                    <button type"submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <button type"submit" name="reset" class="btn btn-danger">Reset</button>
                                </div>
                            <?php 
                        } ?>
                            </div>
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