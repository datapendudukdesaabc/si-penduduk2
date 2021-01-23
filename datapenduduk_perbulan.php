<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penduduk Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

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
                        <marquee><h3>DATA PENDUDUK BULAN <? echo "$bulanNama $ambilthn"; ?></h3></marquee>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<table class="table" border="4" width="600px">
                                <tr bgcolor="yellow">
									<th>No.</th>
                                    <th><center>Nik</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Tempat Lahir</center></th>
                                    <th width="15%"><center>Tanggal Lahir</center></th>
                                    <th width="10%">Jenis Kelamin</th>
                                    <th><center>Alamat</center></th>
                                    <th><center>Agama</center></th>
                                    <th><center>Pendidikan</center></th>
                                    <th><center>Pekerjaan</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_datapenduduk WHERE substr(tgl_lahir,1,7)='$ambilthn-$ambilbln'";
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
									<td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['tmpt_lahir'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['jns_kel'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['pendidikan'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                               <tr bgcolor="yellow">
                                <td colspan="8" class="text-right">
                                        <td>
                                        <td>
                                        <br><br>
                                        Kota Kisaran, &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br>
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
