<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> <!--agar website bisa menyesuaikan tampilan di device berbeda-->
        <title>History</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--untuk mengimport logo yang ada di sidebar-->
        <link rel="stylesheet" href="styleinput_History.css">
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa fa-bars" id="btn"></i>
            <i class="fa fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>History</header>
            <ul> <!--Ganti # untuk memberikan action pada sidebar-->
                <li><a href="../pengingat/pengingat.html"><h6>Pengingat</h6></a></li>
                <li><a href="../saran/saran.html"><h6>Saran</h6></a></li>
                <li><a href="../Tanggapan/tanggapan.html"><h6>Tanggapan</h6></a></li>
                <li><a href="../history/history.html"><h6>Histori</h6></a></li>
            </ul>
        </div>
        
        <div class="topbar">
                <!--tambahkan href untuk memberikan action jika diperlukan-->
                
                <input type="text" placeholder="Search..">
                <div class="topbar-right">
                    <a class="fa fa-user-o" style="font-size:30px;"><h6>Nama User</h6></a>
                </div>          
        </div>
        
        <div class="content">
            <form action="" method="POST">
                <table id="history"> 
                    <tr>
                        <td>Nama Kegiatan</td>
                        <td><input type="text" size="20" name="kegiatan"></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status" id="" >
                                <option value="Selesai">Selesai</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Tambah History" class="tombol" name="proses" onClick="alert('History berhasil ditambahkan')">
                            <a href="history_admin.php"><input type="button" value="Kembali" class="tombol"></a>
                        </td>
                    </tr>
                   </table>
            </form>
        </div>
    </body>
</html>

<?php
  include "koneksi.php";

  if(isset($_POST['proses'])){
    mysqli_query($koneksi,"INSERT INTO history SET
    tanggal = '$_POST[tanggal]',
    kegiatan = '$_POST[kegiatan]',
    status_kegiatan = '$_POST[status]'");
  }


?>