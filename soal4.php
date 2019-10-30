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
            <a class="nav-link" href="soal4.php">Produk</a>
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
                    <div class="card-header">Data Pembelian</div>
                    <div class="card-body">
                        <form action="soal5.php" method="post">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th colspan="6">
                                                <center>DATA DIRI</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th><center>Nama</center></th>
                                            <th><center>Alamat</center></th>
                                            <th><center>Jenis Kelamain</center></th>
                                            <th><center>Tanggal Pembelian</center></th>
                                            <th><center>Jumlah</center></th>
                                        </tr>
                                        <?php

                                        if (isset($_POST['simpan'])) {

                                            $email = $_POST['email'];
                                            $pass = $_POST['pass'];
                                            $nama = $_POST['nama'];
                                            $alamat = $_POST['alamat'];
                                            $jk = $_POST['jk'];
                                            $tanggal = $_POST['tanggal'];
                                            $jml_form = $_POST['jumlah'];
                                            $nabar = $_POST['nabar'];
                                            $kode = $_POST['kode'];
                                            $jenis = $_POST['jenis'];
                                            $harga = $_POST['harga'];
                                            $jumpro = $_POST['jumpro'];
                                            ?>
                                        <tr>
                                            <td><center><?php echo "$nama"; ?></center></td>
                                            <td><center><?php echo "$alamat"; ?></center></td>
                                            <td><center><?php echo "$jk"; ?></center></td>
                                            <td><center><?php echo "$tanggal"; ?></center></td>
                                            <td><center><?php echo "$jml_form"; ?></center></td>
                                        </tr>
                                        <tr>
                                            <th colspan="6">
                                                <center>DATA BARANG</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th><center>Nama Barang</center></th>
                                            <th><center>Kode Barang</center></th>
                                            <th><center>Jenis Barang</center></th>
                                            <th><center>Harga Produk</center></th>
                                            <th><center>Jumlah Produk</center></th>
                                            <th><center>Total Harga</center></th>
                                        </tr>
                                        <?php

                                        foreach ($nabar as $data => $x) { ?>
                                        <tr>
                                            <td><center><?php echo "$nabar[$data]"; ?></center></td>
                                            <td><center><?php echo "$kode[$data]"; ?></center></td>
                                            <td><center><?php echo "$jenis[$data]"; ?></center></td>
                                            <td><center><?php echo "$harga[$data]"; ?></center></td>
                                            <td><center><?php echo "$jumpro[$data]"; ?></center></td>
                                            <td><center><?php echo $harga[$data] * $jumpro[$data]; ?></center></td>
                                        </tr>
                                        
                                        <?php 
                                    } ?>    

                                        <?php
                                        $a = $harga[$data] * $jumpro[$data];
                                        $tohar = $a + $a;
                                        ?>
                                        <tr>
                                            <th colspan="6">
                                                <center>TOTAL PEMBAYARAN</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Sub Total</th>
                                            <td></td>
                                            <td><?php echo "$tohar"; ?></td>
                                        <tr>
                                            <th>Diskon<?php if ($tohar > 150000) {
                                                            echo " 5%";
                                                        } elseif ($tohar > 250000) {
                                                            echo " 10%";
                                                        } elseif ($tohar > 500000) {
                                                            echo " 20%";
                                                        } ?>
                                            </th>
                                            <td><?php if ($tohar > 150000) {
                                                    echo $tohar * 5 / 100;
                                                } elseif ($tohar > 250000) {
                                                    echo $tohar * 10 / 100;
                                                } elseif ($tohar > 500000) {
                                                    echo $tohar * 20 / 100;
                                                }; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Total Pembayaran</th>
                                            <td><?php echo $tohar; ?></td>
                                        </tr>
                                        <tr>
                                            <td> 
                                                <input type="hidden" name="email" value="<?php echo "$email"; ?>">
                                                <input type="hidden" name="pass" value="<?php echo "$pass"; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">Masukan Nominal Uang</label>                  
                                                <input type="text" name="bayar" class="form-control" required>
                                            </td>
                                        </td>
                                        <tr>
                                            <td>
                                                <button type"submit" name="ok" class="btn btn-primary">OK</button>
                                            </td>
                                        </tr>
                                        <?php 
                                    } ?>
                                    </table>
                                </div>
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