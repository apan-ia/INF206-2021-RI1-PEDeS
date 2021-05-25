<?php 
// mengaktifkan session pada php
//session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$tanggal = $_POST['bulan'];
$kegiatan = $_POST['kegiatan'];
$status = $_POST['status'];

$sql = "INSERT INTO pengingat (bulan, kegiatan, status) VALUES ('$tanggal', '$kegiatan', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();


?>