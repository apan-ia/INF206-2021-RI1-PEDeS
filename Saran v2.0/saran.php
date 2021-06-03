<!doctype html>
<html>
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
	<title>Pengingat</title>
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
          <a class="nav-link" href="../pengingat/pengingatAdmin.php">Pengingat </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Saran <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../tanggapan/tanggapan.php">Tanggapan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../history/historyAdmin.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/logout.php">Logout</a>
        </li>
        
      </ul>
 
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
      <div class="">
      <h5><?php echo $_SESSION['nama'] ?></h5>
    </div>
 
   </div>
 
</nav>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              SARAN
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover" id="myTable">
              
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No_Hp</th>
                    <th scope="col">Saran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config.php');
                      $no = 1;
                      $sql = mysqli_query($conn,"SELECT * FROM saran");
                      while($row = mysqli_fetch_array($sql)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['Nama'] ?></td>
                      <td><?php echo $row['No_Hp'] ?></td>
                      <td><?php echo $row['Saran'] ?></td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
      </div>
    </div>
 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
</script>
</body>
</html>