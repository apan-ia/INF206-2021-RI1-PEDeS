<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['login']=='Login') {
	//panggil koneksi database
	include 'koneksi.php';

	$nik = trim($_POST['nik']);
	$password = $_POST['password'];

	//cek apakah ada user dengan nik yang diinputkan
	$perintah=mysqli_query($koneksi,"SELECT nama,nik,password FROM pedes WHERE nik='$nik'");
	if (mysqli_num_rows($perintah)==1) {
		
		while($data=mysqli_fetch_array($perintah)){
			
			//proses pengecekan apakah password benar
			if (password_verify($password, $data['password'])) {
		
				session_start();
				$_SESSION['id']=$data['id'];
				$_SESSION['nama']=$data['nama'];
				$_SESSION['nik']=$data['nik'];
				header('location:pengingat/pengingat.php');
		
			} else {
				header('location:rplLog.php?pesan=Maaf email atau password salah');
			}
			
		}

		
	} else {
		header('location:rplLog.php?pesan=Maaf email atau password salah');
	}
	
} else {
	header('location:rplLog.php');
}
?>