<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Lekton:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lekton:wght@700&family=Montez&display=swap" rel="stylesheet">
    
    <!--CSS-->
    <link rel="stylesheet" href="css/rpl.css">


    <title>Login Pedes</title>
  </head>
  <body class="container-fluid bgfull" >

    <?php
    if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>  

    <!-- Form Login -->
    <div class="d-flex row justify-content-center">
      <div class="col-md-6 col-lg-3">
        <h1 class="text-center nav1 margin2" >PeDeS</h1>
        <div class="login-wrap margin">
            <p class="text-center nav2 " >Reminder Pemeliharaan Fasilitas Umum Desa</p>
            <!-- <p class="text-center ">Ayo Login Untuk Melihat Jadwal Kegiatan Desa</p> -->
          <form method="post" action="cekLogin.php" class="signin-form shadow p-3 mb-5 bg-white rounded ">
            <p class="text-center " >L O G I N</p>
            <div class="form-group">
                <input type="text" name="nik" class="form-control gray border-0" placeholder="Nik" onkeypress="return hanyaAngka(event)" required>
            </div>
            <script>
                function hanyaAngka(event){
                  var angka = (event.which) ? event.which : event.keyCode
                  if (angka != 46 && angka > 31 && (angka < 48 || angka > 57)){
                    return false;
                  }
                  return true;
                }
            </script>
            <div class="form-group">
              <input id="password-field" type="password" name="password" class="form-control gray border-0" placeholder="Password" required>
            </div>
            <div class="form-group">
              <button type="submit" value="Login" name="login" style="background-color: #5F1E1E;" class="form-control btn bgfull submit px-3  text-white" data-toggle="modal" data-target="exampleModalCenter">Login</button>
            </div>
            <div class="form-group" >
              <p><a href="rplReg.php" class="text-primary ms-2" >Register</a></p>
            </div>
            <div class="form-group justify-content-center text-center mt-3">
               <p><a href="index.php" class="text-dark">Kembali Ke Beranda</a> </p>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Akhir Form Login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/f9069f9455.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>