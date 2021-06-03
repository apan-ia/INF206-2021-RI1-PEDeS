<?php 
include 'koneksi.php';

	// filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    // enkripsi password
	//$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	/*$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];*/
	
	$result = mysqli_query($koneksi, "SELECT nik FROM pedes WHERE nik = '$nik'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('Nik Sudah Terdaftar!');
				window.location.href='rplReg.php';
		      </script>";
		
	}else{

	$stmt = $koneksi->prepare("INSERT INTO pedes (nama, nik, password, hak_akses) VALUES (?,?,?,'user')");
	$stmt -> bind_param("sss", $nama, $nik, $password);
	$saved =$stmt->execute();
	//$stmt -> close();

	//mysql_query("INSERT INTO user VALUES('','$nama','$username','$password')");

	if($saved)header("location:rplLog.php?pesan=input");
	}
?>