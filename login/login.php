<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> <!--agar website bisa menyesuaikan tampilan di device berbeda-->
        <title>Login</title>
        <link rel="stylesheet" href="styleLogin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--untuk mengimport logo yang ada di sidebar-->
    </head>
    <body>

        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                }
            }   
        ?>
        
        <div class="sidebar">
            <ul> <!--Ganti # untuk memberikan action pada sidebar-->
                <li><a href="#"><h6>Pengingat</h6></a></li>
                <li><a href="#"><h6>Saran</h6></a></li>
                <li><a href="#"><h6>Tanggapan</h6></a></li>
                <li><a href="#"><h6>Histori</h6></a></li>
            </ul>
        </div>
        
        <div class="content">
            <h3>Login</h3><br><br>
            <div class="user">
                <a class="fa fa-user"></a>
            </div> 
            <form action="cek_login.php" class="signin-form" method="POST">
                <label for="fname">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"><br><br>
                <label for="nik">Nomor Nik</label>
                <input type="number" id="nik" name="nik" placeholder="Masukkan NIK"><br><br>
                <input type="submit" value="Masuk" style="float: center;"><br><br>
              </form>
        </div>
    </body>
</html>