<?php

 include 'config.php';

//mengambil data id dari url
 $id = $_GET['id'];

//hapus data dari database
 $sql = "DELETE FROM pengingat WHERE id='$id'";
 $result = mysqli_query($conn, $sql);

 header("location: pengingatAdmin.php");
	
?>