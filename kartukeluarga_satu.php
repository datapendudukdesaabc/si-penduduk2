<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kartu Keluarga</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kartukeluarga WHERE no_kk='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
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
                        <marquee><h3>DATA KARTU KELUARGA</h3></marquee>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<table class="table" border="4" width="600px">
                                <tr bgcolor="copper">
                                    <td>No KK</td> <td><?= $data['no_kk'] ?></td>
                                </tr>
                                <tr bgcolor="copper">
                                    <td>Nama KK</td> <td><?= $data['nm_kpla_keluarga'] ?></td>
                                </tr>
                                <tr bgcolor="copper">
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr bgcolor="copper">
                                    <td>Kelurahan</td> <td><?= $data['kelurahan'] ?></td>
                                </tr>
								<tr bgcolor="copper">
                                    <td>Kecamatan</td> <td><?= $data['kecamatan'] ?> hari</td>
                                </tr>
                                <tr bgcolor="copper">
                                    <td>Kode Pos</td> <td><?= $data['kode_pos'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr bgcolor="copper">
                                    <td colspan="2" class="text-right">
                                        Kota Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Desa ABC<strong></u><br>
                                       
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
