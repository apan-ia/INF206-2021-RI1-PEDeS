<?php 
// mengaktifkan session pada php
//session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$nik = $_POST['nik'];

$sql = "select * from login where nama = '$nama'";
$result = $koneksi-> query($sql);
$row = $result->fetch_assoc();

if($row){
	// verifikasi nik
	if($row["nik"]){
            // buat Session
            session_start();
            $_SESSION["row"] = $row;
            // login sukses, alihkan ke halaman timeline
            header("Location:pengingat.php");
        }else{
        	// buat session login dan username
			$_SESSION['nama'] = $nama;
			$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard 
			header("location:login.php?pesan=gagal");
        }
		
}else{
	header("location:login.php?pesan=gagal");
}

?>