<?php

//include koneksi database
include('config.php');

//get data dari form
$id    = $_POST['id'];
$bulan         = $_POST['bulan'];
$kegiatan = $_POST['kegiatan'];
$status       = $_POST['status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengingat SET bulan = '$bulan', kegiatan = '$kegiatan', status = '$status' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: pengingatAdmin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
