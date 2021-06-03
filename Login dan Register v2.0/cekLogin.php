<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['login']=='Login') {
	//panggil koneksi database
	include 'koneksi.php';

	$nik = trim($_POST['nik']);
	$password = $_POST['password'];

	//cek apakah ada user dengan nik yang diinputkan
	$perintah=mysqli_query($koneksi,"SELECT nama,nik,password,hak_akses FROM pedes WHERE nik='$nik'");
	if (mysqli_num_rows($perintah)==1) {
		
		while($data=mysqli_fetch_array($perintah)){
			
			//proses pengecekan apakah password benar
			if (password_verify($password, $data['password'])) {
		
				session_start();
				$_SESSION['id']=$data['id'];
				$_SESSION['nama']=$data['nama'];
				$_SESSION['nik']=$data['nik'];
				$_SESSION["hak_akses"] = $data['hak_akses'];
				

				if ($data['hak_akses'] == "admin") {
					header('location:pengingat/pengingatAdmin.php');
				} else {
					header('location:pengingat/pengingat.php');
				}
		
			} else {
				echo "<script>
						alert('Nik atau Password salah');
						window.location.href='rplLog.php';
		      		</script>";
			}
			
		}

		
	} else {
		echo "<script>
				alert('Nik atau Password salah');
				window.location.href='rplLog.php';
		    </script>";
	}
	
} else {
	header('location:rplLog.php');
}
?>