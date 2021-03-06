<!doctype html>
<html>
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
	<title>tanggapan</title>
</head>
<body>
    <?php
      //perintah untuk memastikan apakah sudah login
      session_start();
      if (!isset($_SESSION['nik'])) {
        header('location:../rplLog.php');
        exit;
      }

    ?>
 
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
 
    <a class="navbar-brand" href="#">PEDeS</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="../pengingat/pengingat.php">Pengingat </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../saran/tambahSaran.php">Saran </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Tanggapan <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../history/history.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/logout.php">Logout</a>
        </li>
        
      </ul>
 
      <form class="navbar-form " method="get" action="pengingat.php">
              <div class="input-group no-border">
                <input type="text" name="search" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
      <div class="">
      <h5><?php echo $_SESSION['nama'] ?></h5>
    </div>
 
   </div>
 
</nav>

<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              BERIKAN TANGGAPAN
            </div>
            <div class="card-body">
              <form action="inputTanggapan.php" method="POST">
                
                <div class="form-group">
                  <label>Tanggapan</label>
                  <textarea class="form-control" name="tanggapan" rows="4">Masukkan Tanggapan</textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>