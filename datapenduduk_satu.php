<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penduduk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_datapenduduk WHERE nik='" . $_GET ['id'] . "'";
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
                        <h3>DATA PENDUDUK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                
								<table class="table" border="4" width="600px">
                                <tr bgcolor="teal">
                                    <td>Nik</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr bgcolor="teal">
                                    <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr bgcolor="teal">
                                    <td>Tempat Lahir</td> <td><?= $data['tmpt_lahir'] ?></td>
                                </tr>
                                <tr bgcolor="teal">
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
								<tr bgcolor="teal">
                                    <td>Jenis Kelamin</td> <td><?= $data['jns_kel'] ?></td>
                                </tr>
								<tr bgcolor="teal">
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr bgcolor="teal">
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
                                <tr bgcolor="teal">
                                    <td>Pendidikan</td> <td><?= $data['pendidikan'] ?></td>
                                </tr>
                                <tr bgcolor="teal">
                                    <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr bgcolor="teal">
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