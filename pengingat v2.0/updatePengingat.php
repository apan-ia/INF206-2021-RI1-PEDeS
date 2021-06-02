<?php

//include koneksi database
include('config.php');

//get data dari form
$id_kegiatan     = $_POST['id_kegiatan'];
$bulan         = $_POST['bulan'];
$kegiatan = $_POST['kegiatan'];
$status       = $_POST['status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengingat SET bulan = '$bulan', kegiatan = '$kegiatan', status = '$status' WHERE id_kegiatan = '$id_kegiatan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: pengingatAdmin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>