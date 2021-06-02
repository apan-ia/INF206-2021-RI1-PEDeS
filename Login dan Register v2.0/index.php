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


    <title>Landing Page</title>
  </head>
  <body class="container-fluid ">
      <!--Navbar-->
      <nav class="navbar navbar-expand-sm shadow navbar-light  fixed-top bg-success">
        <div class=" container-fluid" >
          <a class="navbar-brand nav1 ms-3 text-white" href="#"><h3>P E D e S</h3></a>
          <button class="navbar-toggler mt-3 fas fa-bars theme-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Bantuan</a>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="rplReg.php">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="rplLog.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      <!--Akhir Navbar-->

    <!-- Landing Page-->
    <div class="d-flex row  justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="login-wrap margin2">
            <h2></h2>
            <p class="text-center margin2">Gabung ke PeDeS untuk melihat kegiatan yang diselenggarakan oleh Desa</p>
            <a href="pengingat/pengingat_tanpaLogin.php">
        <button type="submit" class="ps v-btn__content" style="color: black;" >
            Lihat Jadwal Kegiatan
        </button>
        </a>
        </div>
      </div>
    </div>
    <!--Akhir landing Page-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/f9069f9455.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>