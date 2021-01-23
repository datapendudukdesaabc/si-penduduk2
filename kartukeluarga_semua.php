<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Kartu Keluarga</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Penduduk Desa ABC Capil Kisaran </h2>
                        <h4>Jalan M.Yamin, No.33, Kisaran, 
                        Kisaran Barat Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211 <br></h4>
                        <hr>
                        <marquee><h3>DATA SELURUH KARTU KELUARGA</h3></marquee>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<table class="table" border="4" width="800px">
                                    <tr bgcolor="yellow">
                                    <th>No.</th>
                                    <th><center>No KK</center></th>
                                    <th><center>Nama KK</center></th>
                                    <th><center>Alamat</center></th>
                                    <th width="15%"><center>Kelurahan</center></th>
                                    <th width="10%">Kecamatan</th>
                                    <th><center>Kode Pos</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kartukeluarga";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr bgcolor="yellow">
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_kk'] ?></td>
									<td><?= $data['nm_kpla_keluarga'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['kelurahan'] ?></td>
                                    <td><?= $data['kecamatan'] ?></td>
                                    <td><?= $data['kode_pos'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        <td>
                                        <br>
                                        Kota Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br>
                                        <u>Desa ABC.<strong>
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
