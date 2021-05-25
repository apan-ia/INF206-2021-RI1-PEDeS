<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> <!--agar website bisa menyesuaikan tampilan di device berbeda-->
        <title>Pengingat</title>
        <link rel="stylesheet" href="StylePengAdmin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--untuk mengimport logo yang ada di sidebar-->
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fa fa-bars" id="btn"></i>
            <i class="fa fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Pengingat</header>
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
            <h2>input jadwal kegiatan</h2>
            <br>
            <br>
                <form action="inputJadwal.php" method="post">
                    <div class="form">
                        <label>Bulan:</label>
                        <input type="date" name="bulan" placeholder="masukkan tanggal"/>
                    </div>
                    <br>
                    <div class="form">
                        <label>Kegiatan:</label>
                        <input type="text" name="kegiatan" placeholder="masukkan nama kegiatan"/>
                    </div>
                    <br>
                    <div class="form">
                        <label>Status:</label>
                        <input type="text" name="status" placeholder="masukkan status kegiatan"/>
                    </div>

                    <button type="submit" name="submit">Submit</button>
                </form>

        </div>
    </body>
</html>