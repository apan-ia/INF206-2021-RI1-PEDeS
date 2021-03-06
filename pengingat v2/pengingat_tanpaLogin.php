<!doctype html>
<html>
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
	<title>Pengingat</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
 
    <a class="navbar-brand" href="../index.php">PEDeS</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Pengingat <span class="sr-only">(current)</span></a>
        </li>
      </ul>
 
      
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Bantuan</a>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../login/rplReg.php">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../login/rplLog.php">Login</a>
              </li>
            </ul>
          </div>
   </div>
 
</nav>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA KEGIATAN
            </div>
              <table class="table table-bordered table-striped table-hover" id="myTable">
              
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config.php');

                      $no = 1;
                      $sql = mysqli_query($conn,"SELECT * FROM pengingat");
                      while($row = mysqli_fetch_array($sql)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['bulan'] ?></td>
                      <td><?php echo $row['kegiatan'] ?></td>
                      <td><?php echo $row['status'] ?></td>
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